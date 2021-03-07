<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Responsavel
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
        if(!session()->get("responsavel")){
            return redirect()->route("site.login");
        }
        return $next($request);
    }
}
