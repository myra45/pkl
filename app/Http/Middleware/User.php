<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Auth\Middleware\Authenticate as Middleware;

class User 
{
    public function handle($request, Closure $next)
    {
        if (auth()->user()->role == 'Member') {
            return $next($request);
        } else {
            return redirect()->route('login')->with('error', 'Invalid credentials');
        }
    }
}
