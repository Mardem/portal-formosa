@extends('layouts.default.entrada')
@section('container')
  <section>
    <div class="busca">
      <form action="{{ route('pesquisaEmpresa') }}" method="get">
        <input type="text" class="form-control input-busca" name="q" placeholder=" O que você procura?" autofocus>
      </form>
    </div>
    <img src="{{ asset('img/loaders/carregamento-noticias-portal-formosa.gif') }}" data-src="{{ asset('img/svg/portal-formosa-dia.svg') }}" alt="Banner principal do site Portal Formosa, imagem mostrando o dia com movimentos" class="banner-principal-dia">
  </section>

  @component('layouts.default.components.busca-fundo')
  @endcomponent

  <section class="destaques-p">
    <div class="container">
      <div class="row">
        <div class="owl-carousel owl-theme">

          @foreach($banners as $banner)
            <div class="item">
              <div class="card card-plus">
                <img class="card-img-top" src="{{ asset('img/loaders/carregamento-noticias-portal-formosa.gif') }}" data-src="{{ asset($banner->imagem) }}" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title card-title-pf">
                    <a href="{{ url($banner->link) }}" target="_blank">{{ $banner->nome }}</a>
                  </h5>
                </div>
              </div>
            </div>
          @endforeach

        </div>
      </div>
    </div>
  </section>


  <section class="categoria-destaque">
    <div class="container">
      <h2 class="texto-descricao-categorias">
        Encontre <b class="txt-destaque">eventos</b>, <b class="txt-destaque">festas</b> e <b
            class="txt-destaque">locais de shows</b>.
        <span class="mais-texto-destaque">Saiba onde encontrar os pontos turísticos como: <b
              class="txt-destaque">Salto do
                    Itiquira</b> ,
                    <b class="txt-destaque">Hoteís Fazenda </b> e <b class="txt-destaque">Expoagro</b>.</span>
      </h2>
      <div class="row">
        <div class="col-sm-6">
          <figure>
            <img src="/img/destaques/fundo-destaque-padaria-v2.svg" alt="">
          </figure>
        </div>

        <div class="col-sm-6">
          <figure>
            <img src="/img/destaques/fundo-destaque-pizzaria.svg" alt="">
          </figure>
        </div>
        <div class="col-sm-6">
          <figure>
            <img src="/img/destaques/fundo-destaque-dentista.svg" alt="">
          </figure>
        </div>
        <div class="col-sm-6">
          <figure>
            <img src="/img/destaques/fundo-destaque-hospital.svg" alt="">
          </figure>
        </div>
        <div class="col-sm-6">
          <!-- Conveniência -->
          <figure>
            <img src="/img/destaques/fundo-destaque-farmacia.svg" alt="">
          </figure>
        </div>
        <div class="col-sm-6">
          <!-- Farmácia -->
          <figure>
            <img src="/img/destaques/fundo-destaque-conveniencia.svg" alt="">
          </figure>
        </div>
      </div>
    </div>
  </section>



  <hr>
  <section>
    <div align="center">
      <a href="#linkCadastro" class="link-sem-traco">
        <div class="cadastro-empresa">
          <h2>Cadastre sua empresa</h2>
          <p class="lead">
            Cadastre sua empresa em nosso portal e <b>anuncie grátis</b> em nosso site.
            Tenha acesso a uma administração gratuita para cadastrar sua empresa e já começar a
            divulgar!
          </p>
        </div>
      </a>
    </div>
  </section>
  <hr>
  <br><br>
  <section class="noticias-destaque">

    <!--
        Serão 6 notícias vindas do Blog ambas serão as mais atuais as recentemente postada
        Uma categoria de filtro deverá ser criada para que o usuário possa alterar as notícias
        Lembrando: As 6 notícias, exemplo:
        Se ele clicar em Educação essas 6 notícias em destaques aleatório passam a ser 6
        notícias em destaque de EDUCAÇÃO.

        Usar de links buscando dados do servidor como foi usado na Biblioteca
    -->
    <div class="container">
      <div class="row">
        @foreach($noticias as $noticia)
          <div class="col-sm-4 card-noticias">
            <div class="card">
              <img class="card-img-top" src="{{ asset('img/loaders/carregamento-noticias-portal-formosa.gif') }}" data-src="{{ $noticia->imagem }}" alt="Card image cap">
              <div class="card-body card-body-news">
                <h5 class="card-title card-title-pf">
                  <a href="{{ $noticia->link }}">
                    @php
                      echo substr($noticia->titulo, 0, 33)
                    @endphp
                  </a>
                </h5>
                <p class="card-text">
                  @php
                    echo substr($noticia->descricao, 0, 140) . "..."
                  @endphp
                </p>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </section>

  <section class="todas-noticias">
    <div class="container py-4">
      <div class="row">

        <div class="col-sm-8"> <!-- Inicio - Noticias -->
          <br><br>
          @foreach($noticiasPF as $noticiaPortal)
            <div class="card w-100 mg-b-15">
              <div class="card-body">
                <h5 class="card-title">{{ $noticiaPortal->titulo }}</h5>
                <p class="card-text">
                <table>
                  <tbody>
                  <tr>
                    <td>
                      <img src="{{ asset('img/loaders/carregamento-noticias-portal-formosa.gif') }}" data-src="{{ $noticiaPortal->imagem }}" width="100">
                    </td>
                    <td style="padding-left: 10px">
                      {{ $noticiaPortal->descricao }}
                    </td>
                  </tr>
                  </tbody>
                </table>
                </p>
                <a href="{{ $noticiaPortal->link }}" class="btn btn-primary">Saber mais</a>
              </div>
            </div>

            <div class="card w-100 mg-b-15">
              <div class="card-body">
                <h5 class="card-title">{{ $noticiaPortal->titulo }}</h5>
                <p class="card-text">
                <table>
                  <tbody>
                  <tr>
                    <td>
                      <img src="{{ asset($noticiaPortal->imagem) }}" width="100">
                    </td>
                    <td style="padding-left: 10px">
                      {{ $noticiaPortal->descricao }}
                    </td>
                  </tr>
                  </tbody>
                </table>
                </p>
                <a href="{{ $noticiaPortal->link }}" class="btn btn-primary">Saber mais</a>
              </div>
            </div>
            <div class="card w-100 mg-b-15">
              <div class="card-body">
                <h5 class="card-title">{{ $noticiaPortal->titulo }}</h5>
                <p class="card-text">
                <table>
                  <tbody>
                  <tr>
                    <td>
                      <img src="{{ asset($noticiaPortal->imagem) }}" width="100">
                    </td>
                    <td style="padding-left: 10px">
                      {{ $noticiaPortal->descricao }}
                    </td>
                  </tr>
                  </tbody>
                </table>
                </p>
                <a href="{{ $noticiaPortal->link }}" class="btn btn-primary">Saber mais</a>
              </div>
            </div>
          @endforeach
        </div> <!-- Fim - notícias -->

        <!-- Inicio barra lateral de informações -->
        <div class="col-sm-4">
          <div class="panel">
            <div class="panel-header">
              <p class="title-panel">Economia</p>
            </div>
            <div class="panel-body">
              <div class="container">
                <div class="info-cotacao">
                  <div class="row">
                    <div class="col-sm-6">
                      <p class="lead">
                        DÓLAR COMERCIAL
                      </p>
                      <b id="valor-dolar" class="lead info-cotacao">
                        <div class="loader"></div>
                      </b>
                      <hr>
                    </div>
                    <div class="col-sm-6">
                      <p class="lead">
                        EURO COMERCIAL
                      </p>
                      <b id="valor-euro" class="lead info-cotacao">
                        <div class="loader"></div>
                      </b>
                      <hr>
                    </div>

                    <a href="#" class="mais-informacoes-economia ion-plus-round">
                      Notícias sobre economia <i class="ion-share"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="panel">
            <div class="panel-header">
              <p class="title-panel">Clima</p>
            </div>
            <div class="panel-body">
              <p class="lead">
                TEMPO EM FORMOSA
              </p>
            </div>
          </div>
          <div class="panel">
            <div class="panel-header">
              <p class="title-panel">
                Plantão de farmácia
              </p>
            </div>
            <div class="panel-body">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aspernatur cum error ipsa
              officiis porro quasi saepe sint suscipit. At autem excepturi magnam non rem saepe soluta.
              Debitis, delectus, fuga?
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut mollitia non quisquam ullam
              voluptates. Corporis, ducimus eligendi error magnam maxime nisi obcaecati quia, sint sit
              tempora temporibus totam velit vero.
            </div>
          </div>

          <div class="panel">
            <div class="panel-header">
              <p class="title-panel">Mais lidos</p>
            </div>
            <div class="panel-body">
              <table class="table-noticias">
                <tbody>
                <tr>
                  <td class="numero">1</td>
                  <td class="preview-noticia">
                    <a href="#">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium ad
                      deleniti eum facere fuga harum hic in iste, laudantium maiores, natus nemo,
                    </a>
                  </td>
                </tr>
                <tr>
                  <td class="numero">2</td>
                  <td class="preview-noticia">
                    <a href="#">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium ad
                      deleniti eum facere fuga harum hic in iste, laudantium maiores, natus nemo,
                    </a>
                  </td>
                </tr>

                <tr>
                  <td class="numero">3</td>
                  <td class="preview-noticia">
                    <a href="#">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium ad
                      deleniti eum facere fuga harum hic in iste, laudantium maiores, natus nemo,
                    </a>
                  </td>
                </tr>

                <tr>
                  <td class="numero">4</td>
                  <td class="preview-noticia">
                    <a href="#">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium ad
                      deleniti eum facere fuga harum hic in iste, laudantium maiores, natus nemo,
                    </a>
                  </td>
                </tr>

                <tr>
                  <td class="numero">5</td>
                  <td class="preview-noticia">
                    <a href="#">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium ad
                      deleniti eum facere fuga harum hic in iste, laudantium maiores, natus nemo,
                    </a>
                  </td>
                </tr>

                </tbody>
              </table>
            </div>
          </div>
        </div> <!-- Fim barra lateral de informações -->

      </div>
    </div>
  </section>
@endsection

@section('styles-src')
  <link rel="stylesheet" href="{{ asset('css/main.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/home.min.css') }}">
  <style>
    .card-body {
      border-top: .5px solid rgba(116, 96, 238, 0.42);
    }
  </style>
@endsection

@section('script-src')
  <script src="{{ asset('/assets/owl/dist/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('/node_modules/jets/jets.min.js') }}"></script>
  <script src="{{ asset('/js/home.js') }}"></script>
  <script src="{{ asset('/js/default.min.js') }}"></script>
@endsection