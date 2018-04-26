<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'Aberto\HomeController@index')->name('inicio');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth', 'can:admin'], 'namespace' => 'Noticias', 'prefix' => 'noticias'], function (){
    Route::get('compor','NoticiasController@compor')->name('comporNoticia');
    Route::get('todas-cadastradas','NoticiasController@allNews')->name('todasNoticias');
    Route::post('salvar-noticia','NoticiasController@save')->name('salvarNoticia');
    Route::post('apagar', 'NoticiasController@delete')->name('apagarNoticia');
    Route::post('cadastro-categoria-noticia', 'NoticiasController@cadastroCategoriaNoticia')->name('cadastroCategoriaNoticia');
});

Route::group(['middleware' => ['auth', 'can:admin'], 'namespace' => 'Cadastro', 'prefix' => 'cadastro'], function (){
    Route::get('todos', 'EmpresasController@index')->name('todosCadastros');
    Route::get('nova-empresa', 'EmpresasController@novaEmpresa')->name('cadastroNovaEmpresa');
    Route::post('salvar-empresa', 'EmpresasController@salvar')->name('salvarEmpresa');
    
    Route::post('cadastro-categoria-empresa', 'EmpresasController@cadastroCategoria')->name('cadastroCategoria');
    Route::get('apagar-categoria/{id}', 'EmpresasController@apagarCategoria')->name('apagarCategoria');
   
    Route::get('vizualizar-empresa/{id}', 'EmpresasController@ver')->name('verEmpresa');
    Route::get('apagar-empresa/{id}', 'EmpresasController@deleteEmpresa')->name('apagarEmpresa');

    Route::post('atualizar-dados-empresa', 'EmpresasController@atualizarDados')->name('atualizarDadosEmpresa');
});
Route::group(['middleware' => ['auth', 'can:admin'], 'namespace' => 'Usuarios', 'prefix' => 'usuario'], function (){
    Route::get('dados', 'UsuariosController@index')->name('dadosUsuarios');
    Route::post('atualizar-usuario', 'UsuariosController@updateData')->name('atualizarUsuario');
    Route::post('pesquisa', 'UsuariosController@pesquisa')->name('pesquisarUsuario');
    
    Route::post('pesquisa-empresa', 'UsuariosController@pesquisarEmpresa')->name('pesquisarEmpresa');
    Route::get('realizar-vinculo/{idEmpresa}/{idUser}', 'UsuariosController@vincularEmpresa')->name('realizarVinculo');
    Route::get('remover-vinculo/{idEmpresa}/{idUser}', 'UsuariosController@removerVinculo')->name('removerVinculo');
});

Route::group(['middleware' => ['auth', 'can:admin'], 'namespace' => 'Banner', 'prefix' => 'banners'], function (){
    Route::get('todos', 'BannerController@todos')->name('todosBanners');
    Route::get('novo-banner', 'BannerController@criarBanner')->name('criarBanner');
    Route::post('salvar-banner', 'BannerController@salvarBanner')->name('salvarBanner');
    Route::post('apagar-banner', 'BannerController@apagarBanner')->name('apagarBanner');
    Route::get('desativar-banner/{id}/{opt}', 'BannerController@desativarBanner')->name('desativarBanner');
});

Route::group(['namespace' => 'Aberto'], function () {
    Route::get('noticia/{noticia}', 'NoticiasController@mostrarNoticia')->name('lerNoticia');
    Route::get('q', 'EmpresasController@index')->name('pesquisaEmpresa');
    Route::get('p/portfolio', 'HomeController@portfolio')->name('portfolio');
    Route::get('cadastrar-empresa-online', 'EmpresasController@cadastrarMinhaEmpresa')->name('cadastrarMinhaEmpresa');
});

Route::group(['namespace' => 'Aberto', 'prefix' => 'noticias'], function () {
    Route::get('todas-noticias', 'NoticiasController@pesquisaNoticia')->name('todasNoticiasAberta');
});