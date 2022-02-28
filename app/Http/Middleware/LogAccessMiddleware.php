<?php

namespace App\Http\Middleware;

use Closure;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;
use App\Models\LogAccess;

class LogAccessMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $ip         = $request->server->get('REMOTE_ADDR');
        $route       = $request->getRequestUri();
        $browser    = $request->server->get('HTTP_SEC_CH_UA');
        $platform   = $request->server->get('HTTP_SEC_CH_UA_PLATFORM');
        LogAccess::create(['log' => "The $ip, request access in route: $route - with $browser and $platform."]);

        return $next($request);
    }
}
