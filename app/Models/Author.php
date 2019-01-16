<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $fillable = ['name','age', 'status'];
    protected $guarded = ['id', 'created_at', 'update_at'];
    protected $table = 'author';

    public function Books(){
		return $this->belongsToMany(Book::class);
	}
}
