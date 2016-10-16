<?php

namespace App\Http\Controllers;

use App\Models\Usuarios;
use Request;

class UsuariosController extends Controller
{

    public function getListar()
    {
        return Usuarios::all();
    }

    public function postCriarUsuario()
    {
        $dados = Request::all();

        Usuarios::create($dados);

//         $usuario = new Usuarios();
//         $usuario->nome = $dados['nome'];
//         $usuario->save();

        return 'Usuário criado com sucesso';
	}

	public function deleteRemoverUsuario($id)
    {
        $usuario = Usuarios::find($id);

        $usuario->delete();

        return 'Usuário removido com sucesso';
    }

    public function putAtualizarUsuario($id)
    {
        $dados = Request::all();
        $usuario = Usuarios::find($id);

        $usuario->nome = $dados['nome'];
        $usuario->email = $dados['email'];
        $usuario->save();

        return 'Usuário atualizado com sucesso';
    }
}
