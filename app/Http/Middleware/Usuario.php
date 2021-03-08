<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Usuario
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(!session()->get("usuario")){
            return redirect()->route("painel.login");
        }
        return $next($request);
    }
}
