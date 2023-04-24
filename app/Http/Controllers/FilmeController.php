<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\Filme;

class filmeControler extends Controller
{
    //construimos o CRUD aqui

    public function buscaCadastroFilme(){
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
    // dd($dadosFilme);

        $file = $dadosFilme['capafilme'];
        $path = $file->store('capa','public');
        $dadosFilme['capa']  $path;

        Filme::create($dadosFilme);

        //return Redirect::route('/home');
    }
    
}
