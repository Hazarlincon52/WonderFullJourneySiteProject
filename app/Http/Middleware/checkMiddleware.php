<?php

namespace App\Http\Middleware;

use Closure;

class checkMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(Auth()->Check()){
            return $next($request);
        }
        return redirect()->back();
    }
}
