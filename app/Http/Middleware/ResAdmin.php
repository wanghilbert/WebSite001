<?php

namespace App\Http\Middleware;

use Closure;

class ResAdmin
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
        if (!is_null($request->user()) && $request->user()->permission != 'Normal') {
            # code...
            return $next($request);
        }
        return redirect('/home');
    }
}
