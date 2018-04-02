@extends('layouts.default.dashboard')

@section('localSite', 'Composição de notícia')
@section('title', 'Composição de notícia - Portal Formosa')

@section('breadcrumb')
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('inicio') }}">Home</a></li>
    <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="">Noticias</a></li>
    <li class="breadcrumb-item active">Compor</li>
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
    <form action="{{ route('salvarNoticia') }}" method="post" class="card" data-toggle="validator"
          enctype="multipart/form-data">
      {{ csrf_field() }}
      <div class="form-group">
        <label for="">Título da notícia</label>
        <input name="titulo" type="text" class="form-control" value="{{ old('titulo') }}">
        <small class="text-muted">
          Selecione uma imagem principal para ser usada como destaque na notícia
        </small>
      </div>
      <div class="form-group">
        <label for="">Categoria da notícia</label>
        <select name="categoria" class="form-control" required>
          <option value="Política" {{ old('category_id') == 1 ? 'selected' : '' }}>Política</option>
          <option value="Educação" {{ old('category_id') == 1 ? 'selected' : '' }}>Educação</option>
        </select>
        <small class="text-muted">Selecione em que a notícia se encaixa</small>
      </div>
      <div class="form-group" id="link">

      </div>

      <div class="form-group">
        <label for="">Imagem principal</label>
        <input name="imagem" type="file" class="form-control">
        <small class="text-muted">Selecione uma imagem principal para ser usada como destaque na
          notícia
        </small>
      </div>

      <div class="form-group">
        <label for="">Pequena descrição</label>
        <textarea name="descricao" cols="30" rows="10" class="form-control" style="height: 120px"
                  maxlength="156">{{ old('descricao') }}</textarea>
        <small class="text-muted">Escreva uma pequena descrição sobre o que é tratado nessa notícia (Opcional)</small>
      </div>

      <div id="editor"></div>
      <textarea name="code" id="saveCode" class="hidden">{{ old('code') }}</textarea>
      <button class="btn btn-success" type="button" onclick="validar()" id="check">Validar</button>
      <button class="btn btn-success" type="submit" id="save" style="display: none;">Salvar</button>
    </form>
  </div>


@endsection


@section('script-src')
  <script src="{{ asset('node_modules/trumbowyg/dist/trumbowyg.min.js') }}"></script>
  <script src="{{ asset('node_modules/trumbowyg/dist/plugins/pasteimage/trumbowyg.pasteimage.min.js') }}"></script>
  <script src="{{ asset('node_modules/trumbowyg/dist/plugins/template/trumbowyg.template.min.js') }}"></script>
  <script src="{{ asset('node_modules/trumbowyg/dist/plugins/base64/trumbowyg.base64.js') }}"></script>
  <script src="{{ asset('node_modules/trumbowyg/dist/plugins/upload/trumbowyg.upload.min.js') }}"></script>
  <script src="{{ asset('node_modules/trumbowyg/dist/langs/pt_br.min.js') }}"></script>
  <script src="{{ asset('node_modules/sweetalert/dist/sweetalert.min.js') }}"></script>
  <script src="{{ asset('js/noticias.min.js') }}"></script>

  @if(Session::has('error'))
    <script>
      swal({
        title: "Ocorreu um erro!",
        text: "{{ Session::get('error') }}",
        button: "OK!",
        icon: "error"
      });
    </script>
  @endif
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
@endsection

@section('links-src')
  <link rel="stylesheet" href="{{ asset('node_modules/trumbowyg/dist/ui/trumbowyg.min.css') }}">
  <style>
    [contenteditable]:hover, [contenteditable]:focus {
      background: #fff !important;
    }
  </style>
@endsection
