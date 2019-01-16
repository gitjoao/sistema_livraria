<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Bookmaker;
use App\Models\Author;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\BookFormRequest;

class BookController extends Controller
{
    private $book;
    private $author;
    private $bookmaker;

    public function __construct(Book $book, Author $author, Bookmaker $bookmaker){
        $this->Book = $book;
        $this->Author = $author;
        $this->Bookmaker = $bookmaker;
    }
    public function list()
    {
        $authors = $this->Author->get();
        $bookmakers = $this->Bookmaker->get();

        $books = $this->Book->get()->where('status', true);

        foreach ($books as $book) {
            foreach ($authors as $author) {
                if( $book->id_author == $author->id)
                    $book->id_author = $author->name;
            }
        }

        foreach ($books as $book) {
            foreach ($bookmakers as $bookmaker) {
                if( $book->id_bookmaker == $bookmaker->id)
                    $book->id_bookmaker = $bookmaker->name;
            }
        }

        return view('books.list', compact('books'));
    }

    public function create()
    {
        $author = $this->Author->all()->where('status', true);
        $bookmaker = $this->Bookmaker->all()->where('status', true);

        $authors = [];
        $bookmakers = [];

        foreach ($author as $a) {
            $authors += [$a->id => $a->name];
        }

        foreach ($bookmaker as $b) {
            $bookmakers += [$b->id => $b->name];
        }


        return view('books.create', compact('authors','bookmakers'));
    }

    public function store(BookFormRequest $request)
    {
        $book = $request->all();
        $insert = $this->Book->create($book);

        if($insert) {
            return redirect('/book')->withSuccess('Livro cadastrado com sucesso.');
        } else {
            return redirect()
            ->back()
            ->withErrors(['errors' => 'Erro ao cadastrar o Livro.'])
            ->withInput();
        }
    }

    public function show($id)
    {
       $authors = $this->Author->get();
       $bookmakers = $this->Bookmaker->get();

       $book = $this->Book->find($id);

       foreach ($authors as $author) {
        if( $book->id_author == $author->id)
            $book->id_author = $author->name;
    }


    foreach ($bookmakers as $bookmaker) {
        if( $book->id_bookmaker == $bookmaker->id)
            $book->id_bookmaker = $bookmaker->name;
        
    }

    return view('books.show', compact('book'));
}

public function edit($id)
{
    $book = $this->Book->find($id);

    $author = $this->Author->all()->where('status', true);
    $bookmaker = $this->Bookmaker->all()->where('status', true);

    $authors = [];
    $bookmakers = [];

    foreach ($author as $a) {
        $authors += [$a->id => $a->name];
    }

    foreach ($bookmaker as $b) {
        $bookmakers += [$b->id => $b->name];
    }


    return view('books.edit', compact('book','authors','bookmakers'));
}


public function update(BookFormRequest $request, $id)
{
    $newdata = $request->all();

    $book = $this->Book->find($id);

    $update = $book->update($newdata);

    if($update){
        return redirect('/book')->withSuccess('Livro atualizado com sucesso.');
    }else{
        return redirect()
        ->back()
        ->withErrors(['errors' => 'Erro ao atualizar o Livro.'])
        ->withInput();
    }
}

public function destroy($id)
{
    $book = $this->Book->find($id);
    $book->update(['status' => false]);
    return redirect('/book')->withSuccess('Livvro excluido com sucesso.');
}
}
