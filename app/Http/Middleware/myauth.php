<?php

namespace App\Http\Middleware;

use Closure;
use Auth;


class myauth
{
    
    public function handle($request, Closure $next)
    {
        if(!Auth::user()){
            return redirect('signin');
        }
        return $next($request);
    }
}
