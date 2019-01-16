<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{

	protected $fillable = ['title','id_author','id_bookmaker','price', 'status'];
	protected $guarded = ['id', 'created_at', 'update_at'];
	protected $table = 'book';

	public function Author(){
		return $this->belongsTo(Author::class);
	}

	public function Bookmarker(){
		return $this->belongsTo(Bookmarker::class);
	}
}
