@extends('master')
@section('content')
<div class="container custom-login">
    <div class="row">

        <div class="col-sm-4 ">
        <form action="{{ route('registrar_reuniao') }}" method="POST">
          @csrf
          <div class="mb-3">
                <label for="nome" class="form-label">Título</label>
                <input type="text" class="form-control" id="titulo" name="nome" placeholder="Título da reunião">
              </div>
              <div class="mb-3">
                <label for="data" class="form-label">Data</label>
                <input type="date" class="form-control" id="data" name="data" placeholder="Data da Reunião">
              </div>
              <div class="mb-3">
                <label for="descricao" class="form-label">Descrição</label>
                <input type="text" class="form-control" id="descricao" name="descricao" placeholder="Breve Descrição do Assunto">
              </div>

              <button type="submit" class="btn btn-primary">Adicionar</button>
        </form>
        </div>

        

    </div>
</div>
@endsection