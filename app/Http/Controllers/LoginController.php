<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;


class LoginController extends Controller
{
    public function login(Request $request)
    {
        $title = 'Contato';

        $erro = '';
        switch ($request->get('erro')) {
            case 1:
                $erro = 'Usuário ou senha não existe';
                break;

            case 2:
                $erro = 'Autenticação na plataforma é necessária';
                break;
        }

        return view('site.login', compact('title', 'erro'));
    }

    public function authenticate(Request $request)
    {
        $rules = [
                    'user'      => 'email',
                    'password'  => 'required|min:6'
                ];
        $feedback = [
                        'user.email'        => 'O campo Usuário precisa ser preenchido',
                        'password.required' => 'O campo Senha precisa ser preenchido',
                        'password.min'      => 'O campo Senha deve ter no mínimo 6 caracteres'
                    ];

        //validar request - faz uma requisição para rota anterior se houver error
        $request->validate($rules,$feedback);

        $email      = $request->get('user');
        $password   = $request->get('password');

        $user = new User;
        $user_auth = $user->where('email', $email)
                        ->where('password', $password)
                        ->get()
                        ->first();

        if(isset($user_auth->name)){
            session_start();
            $_SESSION['name'] = $user_auth->name;
            $_SESSION['email'] = $user_auth->email;

            return redirect()->route('app.client');
        }else{
            return redirect()->route('site.login',['erro' => 1]);
        }
    }
}
