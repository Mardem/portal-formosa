@extends('layouts.default.dashboard')

@section('localSite', 'Visualizar empresa')
@section('title', 'Visualização de empresas - Portal Formosa')

@section('breadcrumb')
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('inicio') }}">Home</a></li>
    <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="{{ route('todosCadastros') }}">Empresas</a></li>
    <li class="breadcrumb-item active">{{ $e->nome }}</li>
  </ol>
@endsection
@section('container')
  <div class="container">
    <div class="card">
      <div class="row">
        <div class="col-sm-12" align="center">
          <h1 class="lead" style="font-size: 3.25rem;margin-bottom: 25px;color: #185cef;">{{ $e->nome }}</h1>
        </div>
        <div class="col-sm-4">
          <label><b>Endereço:</b> {{ $e->endereco }}</label>
        </div>
        <div class="col-sm-4">
          <label><b>Categoria:</b> {{ $e->categoria }}</label>
        </div>
        <div class="col-sm-4">
          <label><b>Telefone:</b> {{ $e->telefone}}</label>
        </div>
      </div>

      <div class="row">
        <hr style="width:80%">
        <div class="container">
          <div class="row">
            <div class="col-sm-3">
              <label>
                <b>CNPJ:</b>
                @if($e->cnpj == '')
                  <b class="text-danger ion-close-round"> Não cadastrado</b>
                  @else
                  @php
                    echo Crypt::decryptString($e->cnpjView);
                  @endphp
                @endif
              </label>
            </div>
            <div class="col-sm-3">
              <label>
                <b>Razão Social:</b>
                @if($e->razaoSocial == '')
                  <b class="text-danger ion-close-round"> Não cadastrado</b>
                @else
                  {{ $e->razaoSocial }}
                @endif
              </label>
            </div>
            <div class="col-sm-3">
              <label>
                <b>Celular:</b>
                @if($e->celular == '')
                  <b class="text-danger ion-close-round"> Não cadastrado</b>
                @else
                  {{ $e->celular }}
                @endif
              </label>
            </div>
            <div class="col-sm-3">
              <label>
                <b>Email:</b>
                @if($e->email == '')
                  <b class="text-danger ion-close-round"> Não cadastrado</b>
                @else
                  {{ $e->email }}
                @endif
              </label>
            </div>
          </div>
          <div class="row" align="center">
            <div class="col-sm-12" align="center">
              <h2 class="lead" style="margin: 20px 0;font-size: 2em;">Redes Sociais</h2>
            </div>
            <div class="col-sm-4">
              <label>
                <b><i class="fa fa-facebook"></i> Facebook:</b>
                @if($e->facebook == '')
                  <b class="text-danger ion-close-round"> Não cadastrado</b>
                @else
                  {{ $e->facebook }}
                @endif
              </label>
            </div>
            <div class="col-sm-4">
              <label>
                <b> <i class="fa fa-linkedin"></i> Linkedin:</b>
                @if($e->linkedin == '')
                  <b class="text-danger ion-close-round"> Não cadastrado</b>
                @else
                  {{ $e->linkedin }}
                @endif
              </label>
            </div>
            <div class="col-sm-4">
              <label>
                <b> <i class="fa fa-twitter"></i> Twitter:</b>
                @if($e->twitter == '')
                  <b class="text-danger ion-close-round"> Não cadastrado</b>
                @else
                  {{ $e->twitter }}
                @endif
              </label>
            </div>
            <div class="col-sm-4">
              <label>
                <b><i class="fa fa-google-plus" aria-hidden="true"></i> Google Plus:</b>
                @if($e->googlePlus == '')
                  <b class="text-danger ion-close-round"> Não cadastrado</b>
                @else
                  {{ $e->googlePlus }}
                @endif
              </label>
            </div>
            <div class="col-sm-4">
              <label>
                <b><i class="fa fa-youtube-play" aria-hidden="true"></i> Youtube:</b>
                @if($e->youtube == '')
                  <b class="text-danger ion-close-round"> Não cadastrado</b>
                @else
                  {{ $e->youtube }}
                @endif
              </label>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-12" align="center">
              <h2 class="lead" style="font-size: 1.8em;"><i class="fa fa-money" aria-hidden="true"></i> Plano

                @if($e->plano == 0)
                  Grátis
                  @elseif($e->plano == 1)
                  Básico
                @elseif($e->plano == 2)
                  Intermediário
                @elseif($e->plano == 3)
                  Avançado
                  @endif

              </h2>
              <select name="plano" class="form-control">
                <option value="0">Grátis</option>
                <option value="1">Básico</option>
                <option value="2">Intermediário</option>
                <option value="3">Avançado</option>
              </select>
              <button class="btn btn-primary" style="margin-top: 5px;"><i class="fa fa-save"></i> Atualizar
                plano</button>

              <h3>Vinculo com usuário</h3>
              <h4><i class="fa fa-user-circle" aria-hidden="true"></i> Marden Cavalcante</h4>
            </div>
          </div>
        </div>
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