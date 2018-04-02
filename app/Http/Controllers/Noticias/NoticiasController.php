<?php

namespace App\Http\Controllers\Noticias;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NoticiasController extends Controller
{
    public function compor()
    {
        return view('noticias.compor');
    }
    
    public function allNews()
    {
        $noticias = \App\Models\Noticia::where(
            'email', '=', \Auth::user()
            ->email
        )->orderBy('id', 'desc')->get();
        $cNoticias = \App\Models\Noticia::where(
            'email', '=', \Auth::user()
            ->email
        )->count();
        
        return view('noticias.todas', compact('noticias', 'cNoticias'));
    }
    
    public function save(Request $request)
    {
        $validate = $request->validate(
            [
                'titulo'      => 'required',
                'descricao'   => 'required',
                'imagem'      => 'mimes:jpeg,png,svg',
                'linkNoticia' => 'required'
            ]
        );
        
        
        $file = $request->file('imagem');
        $local = 'img/noticias';
        
        
        if ($file == null) {
            $erro = 0;
        } else {
            $erro = $file->getError();
        }
        
        
        if ($erro == 1) {
            session()->flash(
                'error',
                'Infelizmente não foi possível cadastrar este livro, ele é maior que o permitido.'
            );
            return redirect()->back();
        } else {
            
            if ($file == null) {
                session()->flash(
                    'msgError',
                    'Não foi possível mover o arquivo, tente novamente!'
                );
                return redirect()->back();
            } else {
                $name = 'n-' . time() . '-pf.' .
                    $file->getClientOriginalExtension();
                $file->move($local, $name);
                $image = "/" . $local . $name;
                
                $n = new \App\Models\Noticia;
                $n->descricao = $request->descricao;
                $n->link = $request->linkNoticia;
                $n->autor = \Auth::user()->name;
                $n->titulo = $request->titulo;
                $n->code = $request->code;
                $n->imagem = $image;
                $n->postado = 1;
                $n->email = \Auth::user()->email;
                $n->categoria = $request->categoria;
                $n->save();
                
                session()->flash('success', 'Notícia adicionada com sucesso!');
                return redirect()->back();
            }
        }
        
    }
    
    public function delete($id)
    {
        $n = \App\Models\Noticia::find($id);
        $n->delete();
        session()->flash('success', 'Notícia apagada com sucesso!');
    }
}
