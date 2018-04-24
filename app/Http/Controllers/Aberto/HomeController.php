<?php

namespace App\Http\Controllers\Aberto;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $noticiasPF = \App\Models\Noticia::where('postado', '=', 2)->get();
        $noticias = \App\Models\Noticia::where('postado', '=','1')->orderBy('id','desc')->limit(9)->get();
        $banners = \App\Models\Banner::where('ativo', '=', md5(1))->get();
        return view('entrada', compact( 'noticiasPF', 'noticias', 'banners'));
    }
    public function portfolio ()
    {
        return view('portfolio.home');
    }
}
