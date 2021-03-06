<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
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
        if (Auth::guard($guard)->check()) {
            
            if (Auth::user()->getUserType() == 'ADMIN')
        {
            return redirect()->intended('/admin');


        }elseif (Auth::user()->getUserType() == 'HOD')
            {

                return redirect()->intended('/hod');

            }elseif (Auth::user()->getUserType() == 'HR')
            {

                return redirect()->intended('/hr');

            }elseif (Auth::user()->getUserType() == 'IT')
            {

                return redirect()->intended('/it');

            }elseif (Auth::user()->getUserType() == 'CISO')
            {

                return redirect()->intended('/ciso');

            }
        }

        return $next($request);
    }
}
