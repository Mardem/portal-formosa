@extends('layouts.default.dashboard')

@section('localSite', 'Cadastro de empresas')
@section('title', 'Cadastro de empresas - Portal Formosa')

@section('breadcrumb')
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('inicio') }}">Home</a></li>
    <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="{{ route('todosCadastros') }}">Cadastro</a></li>
    <li class="breadcrumb-item active">Empresas</li>
  </ol>
@endsection
@section('container')
  <div class="container">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif
    <form action="{{ route('salvarEmpresa') }}" method="post" class="card" data-toggle="validator"  enctype="multipart/form-data">
      {{ csrf_field() }}
      <div class="form-group">
        <label>Nome da empresa</label>
        <input name="nome" type="text" class="form-control" value="{{ old('titulo') }}">
        <small class="text-muted">Escreva o nome fantasia da empresa a ser cadastrada</small>
      </div>

      <div class="form-group">
        <label>Categoria da empresa</label>
        <select name="categoria" class="form-control" required>
          @foreach($categorias as $categoria)
            <option value="{{ $categoria->nome }}">{{ $categoria->nome }}</option>
          @endforeach
        </select>
        <small class="text-muted">Selecione em que a notícia se encaixa</small>
      </div>
      <div class="form-group">
        <label>Endereço da empresa</label>
        <input name="endereco" type="text" class="form-control" value="{{ old('endereco') }}">
        <small class="text-muted">Escreva o endereço da empresa</small>
      </div>
      <div class="form-group">
        <label>Telefone</label>
        <input name="telefone" type="text" class="form-control" value="{{ old('telefone') }}">
        <small class="text-muted">Digite o número de telefone da empresa</small>
      </div>
      <div class="form-group">
        <label>CNPJ</label>
        <input name="cnpj" type="text" class="form-control" value="{{ old('telefone') }}">
        <small class="text-muted">Insira o CNPJ da empresa</small>
      </div>
      <button class="btn btn-primary">
        <i class="fa fa-save"></i>
        Salvar
      </button>
    </form>

    <div class="card">
      <legend>Cadastrar categoria de empresa</legend>

      <form action="{{ route('cadastroCategoria') }}" class="form-fluid" method="post">
        {{ csrf_field() }}
        <div class="form-group">
          <label>Nome da categoria</label>
          <input type="text" name="categoria" class="form-control">
          <small class="text-muted">Escreva o nome da categoria para que possa aparecer no cadastro da empresa</small>
        </div>
        <div class="form-group">
          <label>Descrição da categoria</label>
          <input type="text" name="descricao" class="form-control" required>
          <small class="text-muted">Escreva a descrição da categoria com o mínimo de 100 caracteres</small>
        </div>
        <button class="btn btn-info btn-block">
          <i class="fa fa-save"></i>
          Salvar
        </button>
      </form>

      <div class="table-responsive">
        <table class="table">
          <thead>
          <tr>
            <th>#</th>
            <th>Nome</th>
            <th>Ações</th>
          </tr>
          </thead>
          <tbody>
            @foreach($categorias as $categoria)
              <tr>
                <td scope="row">{{ $categoria->id }}</td>
                <td>{{ $categoria->nome }}</td>
                <td>
                  <a href="{{ route('apagarCategoria', [$categoria->id]) }}" class="btn btn-primary
                  ion-ios-trash-outline"> Apagar</a>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection

@section('script-src')
  <script src="{{ asset('node_modules/sweetalert/dist/sweetalert.min.js') }}"></script>
  @if(Session::has('success'))
    <script>
      swal({
        title: "Tudo certo",
        text: "{{ Session::get('success') }}",
        button: "OK!",
        icon: "success"
      });
    </script>
  @endif

  @if(Session::has('error'))
    <script>
      swal({
        title: "Ops!",
        text: "{{ Session::get('error') }}",
        button: "OK!",
        icon: "error"
      });
    </script>
  @endif
@endsection