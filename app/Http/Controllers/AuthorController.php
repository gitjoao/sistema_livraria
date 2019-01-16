<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\AuthorFormRequest;

class AuthorController extends Controller
{
    private $author;

    public function __construct(Author $author){
        $this->Author = $author;
    }

    public function list()
    {
        $authors = $this->Author->all()->where('status', true);
        return view('authors.list', compact('authors'));
    }

    public function create()
    {
        return view('authors.create');
    }

    public function store(AuthorFormRequest $request)
    {
        $author = $request->all();
        $insert = $this->Author->create($author);

        if($insert) {
        return redirect('/author')->withSuccess('Autor cadastrado com sucesso.');
        } else {
                return redirect()
                    ->back()
                    ->withErrors(['errors' => 'Erro ao cadastrar o Autor.'])
                    ->withInput();
        }
    }

    public function show($id)
    {
        $author = $this->Author->find($id);
        return view('authors.show', compact('author'));
    }

    public function edit($id)
    {
        $author = $this->Author->find($id);
        return view('authors.edit', compact('author'));
    }


    public function update(AuthorFormRequest $request, $id)
    {
        $newdata = $request->all();

        $author = $this->Author->find($id);

        $update = $author->update($newdata);

        if($update){
            return redirect('/author')->withSuccess('Autor atualizado com sucesso.');
        }else{
            return redirect()
                        ->back()
                        ->withErrors(['errors' => 'Erro ao atualizar o autor.'])
                        ->withInput();
        }
    }

    public function destroy($id)
    {
        $author = $this->Author->find($id);
        $author->update(['status' => false]);
        return redirect('/author')->withSuccess('Autor excluido com sucesso.');
    }
}
