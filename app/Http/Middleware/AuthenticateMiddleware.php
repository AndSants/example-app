<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AuthenticateMiddleware
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
        session_start();
        $auth = false;

        switch ($method_autenticate) {
            case 'ldap':
                $auth = 'Verifica usuário e senha no AD';
                break;
            case 'xyz':
                $auth = 'Verifica usuário e senha método xyz';
                break;
            default:
                if(isset($_SESSION['email']) && $_SESSION['email'] != ''){
                    $auth = true;
                }
                break;
        }

        if($auth){
            return $next($request);
        }else{
            return redirect()->route('site.login',['erro' => 2]);
        }
    }
}
