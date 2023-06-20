<!-- Modal -->
<div class="modal fade" id="modalagendaCadastrar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Cadastrar</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-dark">

      <form method = "post" action="{{route('cadastro-agenda')}}">

 
        @csrf 

        <div class="mb-3 form-check">
        <label for="nomeInput" class="form-label fs-5 text-dark  ">Nome:</label>
        <input type="text" name="nome" class="form-control" id="nomeInput" >
    </div>

    <div class="mb-3 form-check">
        <label for="telefoneInput" class="form-label fs-5 text-dark  ">Telefone:</label>
        <input type="text" name="telefone" class="form-control" id="emailInput">
    </div>

    <div class="mb-3 form-check">
        <label for="emailInput" class="form-label fs-5 text-dark  ">Email:</label>
        <input type="text" name="email"class="form-control" id="whatsappInput" >
    </div>
    
    <div class="mb-3 form-check">
        <label for="enderecoInput" class="form-label fs-5 text-dark  ">Endereço:</label>
        <input type="text" name="endereco" class="form-control" id="cpfInput">
    </div>

    <div class="mb-3 form-check">
        <label for="cargoInput" class="form-label fs-5 text-dark  ">Cargo:</label>
        <input type="text" name="cargo"class="form-control" id="senhaInput">
    </div>

    <div class="mb-3 form-check">
        <label for="dtnascimentoInput" class="form-label fs-5 text-dark  ">Data de nascimento:</label>
        <input type="date" name="dtnascimento"class="form-control" id="senhaInput">
    </div>
    
    <br /> 
    <div class="d-grid gap-2 col-6 mx-auto">
            <button type="submit" class="btn btn-secondary btn-lg">Salvar</button>
    </div>         
</form>

    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>   
    </div>
    </div>
  </div>
</div>