@extends('master')
@section('content')
<div class="container custom-login">
    <div class="row">

        <div class="col-sm-4 ">

            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Data</label>
                <input type="date" class="form-control" id="formGroupExampleInput" placeholder="Data da Reunião">
              </div>
              <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Descrição</label>
                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Breve Descrição do Assunto">
              </div>

              <button type="submit" class="btn btn-primary">Adicionar</button>

        </div>

        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Data</th>
              </tr>
            </thead>
            <tbody>
              <tr>

              </tr>

            </tbody>
          </table>

    </div>
</div>
@endsection