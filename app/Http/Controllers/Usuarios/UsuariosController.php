<?php

namespace App\Http\Controllers\Usuarios;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function index()
    {
        return view('usuarios.dados');
    }
    
    public function updateData(Request $request)
    {
        try {
            $u = \App\User::find($request->id);
            
            if ($u->cpf == '') {
                $u->cpf = md5($request->cpf);
                $u->cpfView = Crypt::encryptString($request->cpf);
            } else {
            }
            
            if ($u->cnpj == '') {
                $u->cnpj = md5($request->cnpj);
                $u->cnpjView = Crypt::encryptString($request->cnpj);
            } else {
            }
            
            $u->save();
            session()->flash('success', 'Dados atualizados com sucesso!');
            return redirect()->back();
        } catch (\Exception $e) {
            session()->flash(
                'error',
                'Houve um erro ao atualizar os dados: ' . $e->getMessage()
            );
            return redirect()->back();
        }
    }
    
    public function pesquisa(Request $request)
    {
        try {
            $u = \App\User::where('cpf', '=', md5($request->pesquisa))->get()[0];
            $vinculoEmpresa = \App\Models\Empresa::where('cnpj', '=', md5($request->cnpj))->paginate();
            return view('usuarios.pesquisa', compact('u', 'vinculoEmpresa'));
        } catch (\Exception $e) {
            session()->flash('error', 'Usuário não encontrado!');
            return redirect()->back();
        }
    }
    public function pesquisarEmpresa (Request $request)
    {
        
        if ($request->cnpj == '') {
            session()->flash('error', 'Empresa não encontrada!');
            return redirect()->route('todosCadastros');
        }else {
            try {
                $vE = \App\Models\Empresa::where('cnpj', '=', md5($request->cnpj))->get()[0];
                $user = \App\User::find($request->usuario);
                return view('vinculos.empresa-usuario', compact('vE', 'user'));
            } catch (\Exception $e) {
                session()->flash('error', 'Empresa não encontrada!');
                return redirect()->route('todosCadastros');
            }
        }
    }
    
    public function vincularEmpresa ($empresa, $usuario)
    {
        dd($_GET);
    }
}
