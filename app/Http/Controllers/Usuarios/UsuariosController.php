<?php

namespace App\Http\Controllers\Usuarios;

use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Crypt;
use App\Http\Controllers\Controller;
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
            $vinculoEmpresa = \App\Models\Empresa::where('vinculo', '=', $u->empresa)->paginate();
            try {
                $userVinculado = Crypt::decryptString($u->empresa);
            } catch (\Exception $e) {
                $userVinculado = $u->empresa;
            }
            $empresas = \App\Models\Empresa::where('vinculo', '=',
                $userVinculado)->count();
            
            
            return view('usuarios.pesquisa', compact('u',
                'vinculoEmpresa', 'empresas'));
        } catch (\Exception $e) {
            session()->flash('error', 'Usuário não encontrado!' . $e->getMessage());
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
        try {
            $u = \App\User::find($usuario);
            $u->empresa = $empresa;
            $u->save();
            
            $e = \App\Models\Empresa::find($empresa);
            $e->vinculo = $usuario;
            $e->save();
            session()->flash('success', 'Empresa vinculada com sucesso!');
            return redirect()->route('verEmpresa', $empresa);
            
        } catch (\Exception $e) {
            session()->flash('error', 'Não foi possível realizar o vinculo: ' . $e->getMessage());
            return redirect()->route('verEmpresa', $empresa);
        }
    }
    public function removerVinculo ($empresa, $usuario)
    {
        try {
            $u = \App\User::find($usuario);
            $u->empresa = Crypt::encryptString('');
            $u->save();
        
            $e = \App\Models\Empresa::find($empresa);
            $e->vinculo = Crypt::encryptString('');
            $e->save();
            session()->flash('success', 'Vinculo removido com sucesso!');
            return redirect()->route('verEmpresa', $empresa);
        
        } catch (\Exception $e) {
            session()->flash('error', 'Não foi possível remover o vinculo: ' .
                $e->getMessage());
            return redirect()->route('verEmpresa', $empresa);
        }
    }
}
