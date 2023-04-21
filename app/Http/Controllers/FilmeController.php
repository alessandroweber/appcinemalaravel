<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Model\Filme;

class FilmeCOntroller extends Controller
{
    //construimos o CRUD aqui

    public function buscarCadastroFilme(){
        return View('cadastroFilme');
    }
    public function cadastrarFilme(Request $request){
        $dadosFilme = $request->validate([
            'filme' => 'string|required',
            'atores' => 'string|required',
            'dataLancamento' => 'string|required',
            'sinopse' => 'string|required',
            'capa' => 'string|required',       
        ]);

        Filme::create($dadosFilme);

        return Redirect::route('cadastro-filme');
    }
    
}
