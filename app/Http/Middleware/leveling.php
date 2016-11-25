<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class leveling
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check() && Auth::user()->level==1) {
          return redirect('/');
          // return redirect('user');
            // return $next($request);
        } else if (Auth::guard($guard)->check() && Auth::user()->level==99) {
           return redirect('admin');
        }else{
             return redirect('/');
        }

        
    }
}
