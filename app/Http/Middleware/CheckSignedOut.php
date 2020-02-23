<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class CheckSignedOut
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
        if(Auth::guest()){
            return redirect()->route('get.signin');
        }
        return $next($request);
    }
}
