<?php

namespace App\Http\Middleware;

use Closure;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next , $admin)
    {
        if (auth()->check() && auth()->user()->user_type == $admin)
        {
            return $next($request);
        }
        else
        {
            return redirect('/about');
        }


    }
}
