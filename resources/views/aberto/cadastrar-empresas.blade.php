@extends('layouts.default.v2.noticias')
@section('titlePage', 'Cadastrar sua empresa online no Portal  - ')
@section('container')

            <div class="row">
                <div class="col-sm-7 col-lg-6 col-xlg-6 col-xlg-push-2" >
                    <br><br>

                    <div class="container texto-apresentacao" align="center">
                        <h1>Cadastre sua <span class="empresa">empresa</span> e fique <span class="online">on</span>line</h1>
                    </div>

                    <figure>
                        <img src="{{ asset('img/svg/cadastro-online-acesso-ilimitado-2.svg') }}" alt="">
                    </figure>

                    <div class="container">
                        <h2 class="lead descricao">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab amet, asperiores aut autem consequatur dolorum eligendi esse itaque iusto molestiae perferendis praesentium quae quaerat quasi repudiandae similique, sint sit voluptatem?
                        </h2>
                    </div>
                </div>
                <div class="col-sm-5  col-lg-6 col-xlg-push-7 form-cadastro-empresa">
                    <br>
                    <div class="form-group">
                        <label>Teste</label>
                        <input type="text"
                               class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                        <small id="helpId" class="form-text">Insira o nome da empresa</small>
                    </div>
                </div>
            </div>

@endsection

@section('styles-src')
    <link rel="stylesheet" href="{{ asset('css/navbar-nivel-2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/cadastrar-empresa.min.css') }}">
@endsection

@section('script-src')
    <script src="{{ asset('js/default/todas-noticias.js') }}"></script>
@endsection