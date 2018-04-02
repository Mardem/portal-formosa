<?php

namespace App\Http\Controllers\Aberto;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NoticiasController extends Controller
{
    public function mostrarNoticia ($link)
    {
        $nC = \App\Models\Noticia::where('link', '=', $link)->count();
        
        
        if ($nC == 0) {
            echo "Notícia não encontrada";
        } else {
            $noticia = \App\Models\Noticia::where('link', '=', $link)->get()[0];
            return view('public.noticias.ler', compact('noticia'));
        }
    }
}
