<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AutenticacaoMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $method_autenticate)
    {
        switch ($method_autenticate) {
            case 'ldap':
                $method = 'Verifica usuário e senha no AD';
                break;
            case 'xyz':
                $method = 'Verifica usuário e senha método xyz';
                break;
            default:
                $method = 'Verifica usuário e senha no banco de dados';
                break;
        }

        echo $method;

        if(true){
            return $next($request);
        }else{
            return Response('Acesso negado! Rota exige autenticação!!!');
        }
    }
}
