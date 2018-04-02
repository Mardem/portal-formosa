@extends('layouts.default.site')
@section('container')
  <br>
  <h1 class="text-center">
    {{ $noticia->titulo }}
  </h1>
  <br>
  <div class="text-center">
    <img src="{{  url(''.$noticia->imagem)  }}" alt="" align="center ">
  </div>
  <div class="container">
    {!! $noticia->code !!}
  </div>
@endsection
@section('script-src')
  <script src="{{ asset('/assets/owl/dist/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('/js/default.js') }}"></script>
@endsection