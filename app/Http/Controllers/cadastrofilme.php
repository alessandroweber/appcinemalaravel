<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\cadastroFilmeModel;

class cadastroFilme extends Controller
{
    //construimos o CRUD aqui

    public function buscaCadastroFilme(){
        return View('cadastroFilme');
    }
    public function cadastrarFIlme(Request $request){
        $dadosFilme = $request->validate([
            'filme' => 'string|required',
            'atores' => 'string|required',
            'dataLancamento' => 'string|required',
            'sinopse' => 'string|required',
            'capa' => 'string|required',       
        ]);

        cadastroFilmeModel::create($dadosFilme);

        return Redirect::route('home');
    }
    
}
