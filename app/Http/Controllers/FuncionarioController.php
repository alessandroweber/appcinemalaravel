<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\Funcionario;

class FuncionarioController extends Controller
{
    public function buscarCadastroFuncionario(){
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
        
        Funcionario::create($dadosFuncionario);

        return Redirect::route('cadastro-funcionario');

    }

    public function buscarFuncionario(){
        return view('gerenciadorFuncionario');
    }

    public function MostrarGerenciadorFuncionario(Request $request){
        $dadosfuncionarios = Funcionario::all();

        $dadosfuncionarios = Funcionario::query();
        $dadosfuncionarios
    })
}
