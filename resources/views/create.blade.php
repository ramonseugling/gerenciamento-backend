@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Adicionar Funcionário
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('funcionarios.store') }}">
          <div class="form-group">
              @csrf
              <label for="name">Login:</label>
              <input type="text" class="form-control" name="show_name"/>
          </div>
          <div class="form-group">
              <label for="price">Nome:</label>
              <input type="text" class="form-control" name="genre"/>
          </div>
          <div class="form-group">
              <label for="price">CPF:</label>
              <input type="text" class="form-control" name="imdb_rating"/>
          </div>
          <div class="form-group">
              <label for="quantity">E-mail:</label>
              <input type="text" class="form-control" name="lead_actor"/>
          </div>
          <div class="form-group">
              <label for="price">Endereço:</label>
              <input type="text" class="form-control" name="imdb_rating"/>
          </div>
          <div class="form-group">
              <label for="price">Senha:</label>
              <input type="text" class="form-control" name="imdb_rating"/>
          </div>
          <button type="submit" class="btn btn-primary">Adicionar</button>
      </form>
  </div>
</div>
@endsection