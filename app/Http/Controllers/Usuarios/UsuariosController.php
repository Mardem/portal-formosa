<?php

namespace App\Http\Controllers\Usuarios;

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
                $u->cpf = $request->cpf;
            } else {
            }
            
            if ($u->cnpj == '') {
                $u->cnpj = $request->cnpj;
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
        dd($request->all());
    }
}
