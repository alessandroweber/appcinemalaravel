<!-- Modal -->
<div class="modal fade" id="modaInfo-{{$dadoagenda->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Mais Informações</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-dark">
      
    <label for="nomeInput" class="form-label fs-5 text-dark  ">Nome:</label>
    <div class="card">
        <div class="card-body">
            {{$dadoagenda->nome}}
        </div>
    </div>

    <br /> 

    <label for="nomeInput" class="form-label fs-5 text-dark  ">Telefone:</label>
    <div class="card">
        <div class="card-body">
            {{$dadoagenda->telefone}}
        </div>
    </div>
 

    <br /> 

    <label for="nomeInput" class="form-label fs-5 text-dark  ">E-mail:</label>
    <div class="card">
        <div class="card-body">
            {{$dadoagenda->email}}
        </div>
    </div>


    <br /> 

    <label for="nomeInput" class="form-label fs-5 text-dark  ">Endereço:</label>
    <div class="card">
        <div class="card-body">
            {{$dadoagenda->endereco}}
        </div>
    </div>

    
    <br /> 

    <label for="nomeInput" class="form-label fs-5 text-dark  ">Cargo:</label>
    <div class="card">
        <div class="card-body">
            {{$dadoagenda->cargo}}
        </div>
    </div>

    
    <br /> 

    <label for="nomeInput" class="form-label fs-5 text-dark  ">Data de nascimento:</label>
    <div class="card">
        <div class="card-body">
            {{$dadoagenda->dtnascimento}}
        </div>
    </div>
 
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>   
    </div>
    </div>
  </div>
</div>