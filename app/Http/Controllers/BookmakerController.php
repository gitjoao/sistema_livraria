<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bookmaker;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\BookmakerFormRequest;

class BookmakerController extends Controller
{
     private $bookmaker;

    public function __construct(Bookmaker $bookmaker){
        $this->Bookmaker = $bookmaker;
    }
   public function list()
    {
        $bookmakers = $this->Bookmaker->all()->where('status', true);
        return view('bookmakers.list', compact('bookmakers'));
    }

    public function create()
    {
        return view('bookmakers.create');
    }

    public function store(BookmakerFormRequest $request)
    {
        $bookmaker = $request->all();
        $insert = $this->Bookmaker->create($bookmaker);

        if($insert) {
        return redirect('/bookmaker')->withSuccess('Editora cadastrada com sucesso.');
        } else {
                return redirect()
                    ->back()
                    ->withErrors(['errors' => 'Erro ao cadastrar a Editora.'])
                    ->withInput();
        }
    }

    public function show($id)
    {
        $bookmaker = $this->Bookmaker->find($id);
        return view('bookmakers.show', compact('bookmaker'));
    }

    public function edit($id)
    {
        $bookmaker = $this->Bookmaker->find($id);
        return view('bookmakers.edit', compact('bookmaker'));
    }


    public function update(BookmakerFormRequest $request, $id)
    {
        $newdata = $request->all();

        $bookmaker = $this->Bookmaker->find($id);

        $update = $bookmaker->update($newdata);

        if($update){
            return redirect('/bookmaker')->withSuccess('Editora atualizada com sucesso.');
        }else{
            return redirect()
                        ->back()
                        ->withErrors(['errors' => 'Erro ao atualizar a Editora.'])
                        ->withInput();
        }
    }

    public function destroy($id)
    {
        $bookmaker = $this->Bookmaker->find($id);
        $bookmaker->update(['status' => false]);
        return redirect('/bookmaker')->withSuccess('Editora excluida com sucesso.');
    }
}
