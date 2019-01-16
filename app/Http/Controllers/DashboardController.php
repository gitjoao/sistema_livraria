<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Author;
use App\Models\Bookmaker;
use App\Models\Book;

class DashboardController extends Controller
{
	private $author;
	private $bookmaker;
	private $book;

    public function __construct(Author $author, Bookmaker $bookmaker, Book $book){
        $this->Author = $author;
        $this->Bookmaker = $bookmaker;
        $this->Book = $book;
    }


	public function index()
	{
		 $author = $this->Author->where('status', true)->count();
		 $bookmaker = $this->Bookmaker->where('status', true)->count();
		 $book = $this->Book->where('status', true)->count();
		
		return view('dashboards.index', compact('author', 'bookmaker', 'book'));
	}
}
