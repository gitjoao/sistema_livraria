<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bookmaker extends Model
{
	protected $fillable = ['name','cep','number','street','city','neighborhood', 'state', 'status'];
	protected $guarded = ['id', 'created_at', 'update_at'];
	protected $table = 'bookmaker';

	 public function Books(){
		return $this->belongsToMany(Book::class);
	}
}
