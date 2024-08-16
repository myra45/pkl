<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;


class Role
{
    public function handle($request, Closure $next, $role)
{
    if (Auth::guard('admin')->check() && Auth::guard('admin')->user()->role == $role) {
        return $next($request);
    }
    
    return redirect()->route('admin_login')->with('error', 'Unauthorized access.');
}

}
