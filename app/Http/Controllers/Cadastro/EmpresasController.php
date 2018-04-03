<?php

namespace App\Http\Controllers\Cadastro;

use Illuminate\Support\Facades\Crypt;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmpresasController extends Controller
{
    public function index()
    {
        $e = \App\Models\Empresa::orderBy('id', 'desc')->paginate();
        $empresasCount = \App\Models\Empresa::count();
        return view('cadastro.empresas.todos', compact('e', 'empresasCount'));
    }
    
    public function novaEmpresa()
    {
        $categorias = \App\Models\Categoria::orderBy('id', 'desc')->where(
            'local', '=', 0
        )->get();
        return view('cadastro.empresas.empresas', compact('categorias'));
    }
    
    public function salvar(Request $request)
    {
        $validate = $request->validate(
            [
                'nome'      => 'required',
                'categoria' => 'required',
                'endereco'  => 'required',
                'telefone'  => 'required',
            ]
        );
        
        try {
            $e = new \App\Models\Empresa;
            $e->nome = $request->nome;
            $e->categoria = $request->categoria;
            $e->endereco = $request->endereco;
            $e->telefone = $request->telefone;
            $e->cnpj = md5($request->cnpj);
            $e->cnpjView = Crypt::encryptString($request->cnpj);
            $e->plano = 0;
            $e->save();
            
            session()->flash('success', 'Empresa cadastrada com sucesso!');
            return redirect()->back();
        } catch (\Exception $e) {
            session()->flash(
                'error',
                'Infelizmente ocorreu um erro no cadastro: ' . $e->getMessage()
            );
            return redirect()->back();
        }
    }
    
    public function cadastroCategoria(Request $request)
    {
        try {
            $c = new \App\Models\Categoria;
            $c->nome = $request->categoria;
            $c->local = 0;
            $c->descricao = $request->descricao;
            $c->save();
            session()->flash('success', 'Categoria cadastrada com sucesso!');
            return redirect()->back();
        } catch (\Exception $e) {
            session()->flash(
                'error',
                'Infelizmente ocorreu um erro no cadastro: ' . $e->getMessage()
            );
            return redirect()->back();
        }
    }
    
    public function apagarCategoria($id)
    {
        try {
            $c = \App\Models\Categoria::find($id);
            $c->delete();
            session()->flash('success', 'Categoria deletada com sucesso!');
            return redirect()->back();
        } catch (\Exception $e) {
            session()->flash(
                'error',
                'Infelizmente ocorreu um erro na deleção:  ' . $e->getMessage()
            );
            return redirect()->back();
        }
    }
    
    public function ver($id)
    {
        $e = \App\Models\Empresa::find($id);
        return view('cadastro.empresas.ver', compact('e'));
    }
    
    public function deleteEmpresa($id)
    {
        try {
            $e = \App\Models\Empresa::find($id);
            $e->delete();
            session()->flash('success', 'Empresa deletada com sucesso!');
            return redirect()->back();
        } catch (\Exception $e) {
            session()->flash(
                'error',
                'Infelizmente ocorreu um erro na deleção:  ' . $e->getMessage()
            );
            return redirect()->back();
        }
    
    }
}
