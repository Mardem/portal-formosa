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
          <label><b>Telefone:</b>

            @if($e->telefone == '')
              <b class="text-danger ion-close-round"> Não cadastrado</b>
              <form action="{{ route('atualizarDadosEmpresa') }}" method="post">
                @csrf
                <input type="text" id="telefone" name="telefone" class="form-control" placeholder="Digite o telefone">
                <input type="text" name="opt" class="hidden" value="4">
                <input type="text" name="id" class="hidden" value="{{ $e->id }}">
                <button class="btn btn-primary btn-block" type="submit" style="border-radius:0 0 5px 5px">
                  Atualizar
                </button>
              </form>
            @else
              {{ $e->telefone }}
            @endif
          </label>
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
                  <form action="{{ route('atualizarDadosEmpresa') }}" method="post">
                    @csrf
                    <input type="text" id="cnpj" name="cnpj" class="form-control" placeholder="Digite o CNPJ">
                    <input type="text" name="opt" class="hidden" value="0">
                    <input type="text" name="id" class="hidden" value="{{ $e->id }}">
                    <button class="btn btn-primary btn-block" type="submit" style="border-radius:0 0 5px 5px">
                      Atualizar
                    </button>
                  </form>
                  @else
                  @php
                    $data = Crypt::decryptString($e->cnpjView);
                  @endphp

                  <form action="{{ route('atualizarDadosEmpresa') }}" method="post">
                    @csrf
                    <input type="text" id="cnpj" name="cnpj" class="form-control" value="{{ $data }}" placeholder="Digite o CNPJ">
                    <input type="text" name="opt" class="hidden" value="0">
                    <input type="text" name="id" class="hidden" value="{{ $e->id }}">
                    <button class="btn btn-primary btn-block" type="submit" style="border-radius:0 0 5px 5px">
                      Atualizar
                    </button>
                  </form>
                @endif
              </label>
            </div>
            <div class="col-sm-3">
              <label>
                <b>Razão Social:</b>
                @if($e->razaoSocial == '')
                  <b class="text-danger ion-close-round"> Não cadastrado</b>
                  <form action="{{ route('atualizarDadosEmpresa') }}" method="post">
                    @csrf
                    <input type="text" name="razao_social" class="form-control" placeholder="Digite a Razão Social">
                    <input type="text" name="opt" class="hidden" value="1">
                    <input type="text" name="id" class="hidden" value="{{ $e->id }}">
                    <button class="btn btn-primary btn-block" type="submit" style="border-radius:0 0 5px 5px">
                      Atualizar
                    </button>
                  </form>
                @else
                  <form action="{{ route('atualizarDadosEmpresa') }}" method="post">
                    @csrf
                    <input type="text" name="razao_social" class="form-control" value="{{ $e->razaoSocial }}" placeholder="Digite a Razão Social">
                    <input type="text" name="opt" class="hidden" value="1">
                    <input type="text" name="id" class="hidden" value="{{ $e->id }}">
                    <button class="btn btn-primary btn-block" type="submit" style="border-radius:0 0 5px 5px">
                      Atualizar
                    </button>
                  </form>
                @endif
              </label>
            </div>
            <div class="col-sm-3">
              <label>
                <b>Celular:</b>
                @if($e->celular == '')
                  <b class="text-danger ion-close-round"> Não cadastrado</b>
                  <form action="{{ route('atualizarDadosEmpresa') }}" method="post">
                    @csrf
                    <input type="text" id="celular" name="celular" class="form-control" placeholder="Digite o nº de celular">
                    <input type="text" name="opt" class="hidden" value="2">
                    <input type="text" name="id" class="hidden" value="{{ $e->id }}">
                    <button class="btn btn-primary btn-block" type="submit" style="border-radius:0 0 5px 5px">
                      Atualizar
                    </button>
                  </form>
                @else
                  <form action="{{ route('atualizarDadosEmpresa') }}" method="post">
                    @csrf
                    <input type="text" id="celular" name="celular" class="form-control" value="{{ $e->celular }}" placeholder="Digite o nº de celular">
                    <input type="text" name="opt" class="hidden" value="2">
                    <input type="text" name="id" class="hidden" value="{{ $e->id }}">
                    <button class="btn btn-primary btn-block" type="submit" style="border-radius:0 0 5px 5px">
                      Atualizar
                    </button>
                  </form>
                @endif
              </label>
            </div>
            <div class="col-sm-3">
              <label>
                <b>Email:</b>
                @if($e->email == '')
                  <b class="text-danger ion-close-round"> Não cadastrado</b>
                  <form action="{{ route('atualizarDadosEmpresa') }}" method="post">
                    @csrf
                    <input type="email" name="email" class="form-control" placeholder="Digite o email">
                    <input type="text" name="opt" class="hidden" value="3">
                    <input type="text" name="id" class="hidden" value="{{ $e->id }}">
                    <button class="btn btn-primary btn-block" type="submit" style="border-radius:0 0 5px 5px">
                      Atualizar
                    </button>
                  </form>
                @else
                  <form action="{{ route('atualizarDadosEmpresa') }}" method="post">
                    @csrf
                    <input type="email" name="email" class="form-control" placeholder="Digite o email" value="{{ $e->email }}">
                    <input type="text" name="opt" class="hidden" value="3">
                    <input type="text" name="id" class="hidden" value="{{ $e->id }}">
                    <button class="btn btn-primary btn-block" type="submit" style="border-radius:0 0 5px 5px">
                      Atualizar
                    </button>
                  </form>
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
                  <form action="{{ route('atualizarDadosEmpresa') }}" method="post">
                    @csrf
                    <input type="url" name="facebook" class="form-control" placeholder="Link da página">
                    <input type="text" name="opt" class="hidden" value="5">
                    <input type="text" name="id" class="hidden" value="{{ $e->id }}">
                    <button class="btn btn-primary btn-block" type="submit" style="border-radius:0 0 5px 5px">
                      Atualizar
                    </button>
                  </form>
                @else

                  <form action="{{ route('atualizarDadosEmpresa') }}" method="post">
                    @csrf
                    <input type="url" name="facebook" class="form-control" value="{{ $e->facebook }}" placeholder="Link da página">
                    <input type="text" name="opt" class="hidden" value="5">
                    <input type="text" name="id" class="hidden" value="{{ $e->id }}">
                    <button class="btn btn-primary btn-block" type="submit" style="border-radius:0 0 5px 5px">
                      Atualizar
                    </button>
                  </form>

                @endif
              </label>
            </div>
            <div class="col-sm-4">
              <label>
                <b> <i class="fa fa-linkedin"></i> Linkedin:</b>
                @if($e->linkedin == '')
                  <b class="text-danger ion-close-round"> Não cadastrado</b>
                  <form action="{{ route('atualizarDadosEmpresa') }}" method="post">
                    @csrf
                    <input type="url" name="linkedin" class="form-control" placeholder="Link da página">
                    <input type="text" name="opt" class="hidden" value="6">
                    <input type="text" name="id" class="hidden" value="{{ $e->id }}">
                    <button class="btn btn-primary btn-block" type="submit" style="border-radius:0 0 5px 5px">
                      Atualizar
                    </button>
                  </form>
                @else
                  <form action="{{ route('atualizarDadosEmpresa') }}" method="post">
                    @csrf
                    <input type="url" name="linkedin" class="form-control" value="{{ $e->linkedin }}" placeholder="Link da página">
                    <input type="text" name="opt" class="hidden" value="6">
                    <input type="text" name="id" class="hidden" value="{{ $e->id }}">
                    <button class="btn btn-primary btn-block" type="submit" style="border-radius:0 0 5px 5px">
                      Atualizar
                    </button>
                  </form>
                @endif
              </label>
            </div>
            <div class="col-sm-4">
              <label>
                <b> <i class="fa fa-twitter"></i> Twitter:</b>
                @if($e->twitter == '')
                  <b class="text-danger ion-close-round"> Não cadastrado</b>
                  <form action="{{ route('atualizarDadosEmpresa') }}" method="post">
                    @csrf
                    <input type="url" name="twitter" class="form-control" placeholder="Link da página">
                    <input type="text" name="opt" class="hidden" value="7">
                    <input type="text" name="id" class="hidden" value="{{ $e->id }}">
                    <button class="btn btn-primary btn-block" type="submit" style="border-radius:0 0 5px 5px">
                      Atualizar
                    </button>
                  </form>
                @else
                  <form action="{{ route('atualizarDadosEmpresa') }}" method="post">
                    @csrf
                    <input type="url" name="twitter" class="form-control" value="{{ $e->twitter }}" placeholder="Link da página">
                    <input type="text" name="opt" class="hidden" value="6">
                    <input type="text" name="id" class="hidden" value="{{ $e->id }}">
                    <button class="btn btn-primary btn-block" type="submit" style="border-radius:0 0 5px 5px">
                      Atualizar
                    </button>
                  </form>
                @endif
              </label>
            </div>
            <div class="col-sm-4">
              <label>
                <b><i class="fa fa-google-plus" aria-hidden="true"></i> Google Plus:</b>
                @if($e->googlePlus == '')
                  <b class="text-danger ion-close-round"> Não cadastrado</b>
                  <form action="{{ route('atualizarDadosEmpresa') }}" method="post">
                    @csrf
                    <input type="url" name="googlePlus" class="form-control" placeholder="Link do perfil">
                    <input type="text" name="opt" class="hidden" value="8">
                    <input type="text" name="id" class="hidden" value="{{ $e->id }}">
                    <button class="btn btn-primary btn-block" type="submit" style="border-radius:0 0 5px 5px">
                      Atualizar
                    </button>
                  </form>
                @else
                  <form action="{{ route('atualizarDadosEmpresa') }}" method="post">
                    @csrf
                    <input type="url" name="googlePlus" class="form-control" value="{{ $e->googlePlus }}" placeholder="Link do perfil">
                    <input type="text" name="opt" class="hidden" value="8">
                    <input type="text" name="id" class="hidden" value="{{ $e->id }}">
                    <button class="btn btn-primary btn-block" type="submit" style="border-radius:0 0 5px 5px">
                      Atualizar
                    </button>
                  </form>
                @endif
              </label>
            </div>
            <div class="col-sm-4">
              <label>
                <b><i class="fa fa-youtube-play" aria-hidden="true"></i> Youtube:</b>
                @if($e->youtube == '')
                  <b class="text-danger ion-close-round"> Não cadastrado</b>
                  <form action="{{ route('atualizarDadosEmpresa') }}" method="post">
                    @csrf
                    <input type="url" name="youtube" class="form-control" placeholder="Link do canal">
                    <input type="text" name="opt" class="hidden" value="9">
                    <input type="text" name="id" class="hidden" value="{{ $e->id }}">
                    <button class="btn btn-primary btn-block" type="submit" style="border-radius:0 0 5px 5px">
                      Atualizar
                    </button>
                  </form>
                @else
                  <form action="{{ route('atualizarDadosEmpresa') }}" method="post">
                    @csrf
                    <input type="url" name="youtube" class="form-control" value="{{ $e->youtube }}" placeholder="Link do canal">
                    <input type="text" name="opt" class="hidden" value="9">
                    <input type="text" name="id" class="hidden" value="{{ $e->id }}">
                    <button class="btn btn-primary btn-block" type="submit" style="border-radius:0 0 5px 5px">
                      Atualizar
                    </button>
                  </form>
                @endif
              </label>
            </div>

            <div class="col-sm-4">
              <label>
                <b><i class="fa fa-globe" aria-hidden="true"></i> Link Personalizado:</b>
                @if($e->link == '')
                  <b class="text-danger ion-close-round"> Não cadastrado</b>
                  <form action="{{ route('atualizarDadosEmpresa') }}" method="post">
                    @csrf
                    <input type="text" name="link" class="form-control" placeholder="Link para empresa">
                    <input type="text" name="opt" class="hidden" value="10">
                    <input type="text" name="id" class="hidden" value="{{ $e->id }}">
                    <button class="btn btn-primary btn-block" type="submit" style="border-radius:0 0 5px 5px">
                      Atualizar
                    </button>
                    <small>
                      Link personalizado para a empresa ser apresentada em nosso site
                    </small>
                  </form>
                @else
                  <form action="{{ route('atualizarDadosEmpresa') }}" method="post">
                    @csrf
                    <input type="text" name="link" class="form-control" value="{{ $e->link }}" placeholder="Link para empresa">
                    <input type="text" name="opt" class="hidden" value="10">
                    <input type="text" name="id" class="hidden" value="{{ $e->id }}">
                    <button class="btn btn-primary btn-block" type="submit" style="border-radius:0 0 5px 5px">
                      Atualizar
                    </button>
                    <small>
                      Link personalizado para a empresa ser apresentada em nosso site
                    </small>
                  </form>
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

              @if($userC == 0)
              @else
                <h3>Vinculo com usuário</h3>
                <h4><i class="fa fa-user-circle" aria-hidden="true"></i> {{ $user->name }}</h4>
                <a href="{{ route('removerVinculo', [$e->id, $user->id]) }}"><i class="fa fa-eraser" aria-hidden="true"></i> Remover vinculo</a>
              @endif

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
  <script>
      $('#telefone').inputmask("(99) 9999-9999");  //static mask
      $('#cnpj').inputmask("99.999.999/9999-99");  //static mask
      $('#celular').inputmask("(99) 9 9999-9999");  //static mask
  </script>
@endsection