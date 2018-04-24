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
                'nome' => 'required',
                'categoria' => 'required',
                'endereco' => 'required',
                'telefone' => 'required',
            ]
        );

        try {
            $e = new \App\Models\Empresa;
            $e->nome = $request->nome;
            $e->categoria = $request->categoria;
            $e->endereco = $request->endereco;
            $e->telefone = $request->telefone;
            $e->bairro = $request->bairro;
            $e->numero = $request->numero;
            $e->cidade = $request->cidade;
            $e->estado = $request->estado;
            if ($request->cnpj == '') {

            } else {
                $e->cnpj = md5($request->cnpj);
                $e->cnpjView = Crypt::encryptString($request->cnpj);
            }
            $e->plano = 0;
            $e->vinculo = md5('*');
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
        $user = \App\User::find($e->vinculo);
        $userC = \App\User::where('empresa', '=', $e->vinculo)->count();
        return view('cadastro.empresas.ver', compact('e', 'user', 'userC'));
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

    public function atualizarDados(Request $request)
    {
        try {
            if ($request->opt == 0) {
                $e = \App\Models\Empresa::find($request->id);
                $e->cnpj = md5($request->cnpj);
                $e->cnpjView = Crypt::encryptString($request->cnpj);
                $e->save();
                session()->flash('success', 'CNPJ atualizado com sucesso!');
            } else if ($request->opt == 1) {
                $e = \App\Models\Empresa::find($request->id);
                $e->razaoSocial = $request->razao_social;
                $e->save();
                session()->flash('success', 'Razão Social atualizada com sucesso!');
            } else if ($request->opt == 2) {
                $e = \App\Models\Empresa::find($request->id);
                $e->celular = $request->celular;
                $e->save();
                session()->flash('success', 'Ceuluar atualizado com sucesso!');
            } else if ($request->opt == 3) {
                $e = \App\Models\Empresa::find($request->id);
                $e->email = $request->email;
                $e->save();
                session()->flash('success', 'Ceuluar atualizado com sucesso!');
            } else if ($request->opt == 4) {
                $e = \App\Models\Empresa::find($request->id);
                $e->telefone = $request->telefone;
                $e->save();
                session()->flash('success', 'Telefone atualizado com sucesso!');
            } else if ($request->opt == 5) {
                $e = \App\Models\Empresa::find($request->id);
                $e->facebook = $request->facebook;
                $e->save();
                session()->flash('success', 'Facebook atualizado com sucesso!');
            } else if ($request->opt == 6) {
                $e = \App\Models\Empresa::find($request->id);
                $e->linkedin = $request->linkedin;
                $e->save();
                session()->flash('success', 'Linkedin atualizado com sucesso!');
            } else if ($request->opt == 7) {
                $e = \App\Models\Empresa::find($request->id);
                $e->twitter = $request->twitter;
                $e->save();
                session()->flash('success', 'Twitter atualizado com sucesso!');
            } else if ($request->opt == 8) {
                $e = \App\Models\Empresa::find($request->id);
                $e->googlePlus = $request->googlePlus;
                $e->save();
                session()->flash('success', 'Google Plus atualizado com sucesso!');
            } else if ($request->opt == 9) {
                $e = \App\Models\Empresa::find($request->id);
                $e->youtube = $request->youtube;
                $e->save();
                session()->flash('success', 'Youtube atualizado com sucesso!');
            } else if ($request->opt == 10) {
                $e = \App\Models\Empresa::find($request->id);
                $e->link = $request->link . "-formosa";
                $e->save();
                session()->flash('success', 'Link próprio atualizado com sucesso!');
            }
            return redirect()->back();
        } catch (\Exception $e) {
            session()->flash(
                'error',
                'Infelizmente ocorreu um erro na atualização:  ' . $e->getMessage()
            );
            return redirect()->back();
        }
    }
}
