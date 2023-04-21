@extends('padrao')

@section('content')

<div class="container mt-5">
<form method="get" action="{{route('gerenciar-funcionario')}}">
  <div class="mb-3 row">
    <label for="inputPesquisar" class="col-sm-2 col-form-label">Pesquisar:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="nomefun" id="inputPesquisar" placeholder="Digite o nome do Funcionario: ">
    </div>
    <div> <button type="submit" class="btn btn-outline-primary">Primary</button> </div>
  </div>
</form>

<table class="table table-dark table-hover">
  <thead>
    <tr>
      <th scope="col">Código</th>
      <th scope="col">Nome</th>
      <th scope="col">E-mail</th>
      <th scope="col">Alterar</th>
      <th scope="col">Excluir</th>
    </tr>
  </thead>
  <tbody>
    @foreach($dadosfuncionario as $dadosfuncionarios)
    <tr>
      <th scope="row">{{$dadosfuncionarios->id}}</th>
      <td>{{$dadosfuncionarios->nomefun}}</td>
      <td>{{$dadosfuncionarios->emailfun}}</td>
      <td>x</td>
      <td>x</td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection