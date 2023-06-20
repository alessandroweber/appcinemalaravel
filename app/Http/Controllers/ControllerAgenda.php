<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agenda;
use Illuminate\Support\Facades\Redirect; 

class controllerAgenda extends Controller
{
        public function MostrarContato(Request $request){

        $dadosagenda = Agenda::query();
        $dadosagenda = $dadosagenda->get();

        return view('index',['dadosagenda'=>$dadosagenda]); 
    }

    public function cadastrarAgenda(Request $request){
        $dadosagenda = $request->validate(
            [
                'nome'=> 'string|required',
                'telefone'=> 'string|required',
                'email'=> 'string|required',
                'endereco'=> 'string|required',
                'cargo'=> 'string|required',
                'dtnascimento'=> 'string|required'
            ]
            );
            Agenda::create($dadosagenda);
        return Redirect::route('contatos');
    }

}
