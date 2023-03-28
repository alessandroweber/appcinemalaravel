<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cadastroFuncionario;

class cadastroFuncionario extends Controller
{
    public function buscaCadastroFuncionario(){
        return View('cadastroFuncionario');
    }
    public function cadastrarFuncionario(Request $request){
        $dadosFuncionario = $request->validate([
            'emailfun' => 'string|required',
            'nomefun' => 'string|required',
            'senha' => 'string|required',
            'whatsapp' => 'string|required',
            'cpf' => 'string|required'
        ]);
        
        cadastroFuncionario::create($dadosFuncionario);

        return Redirect::route('/home');

    }
}
