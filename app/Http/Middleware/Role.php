<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;


class Role
{
    public function handle($request, Closure $next)
    {
        if (auth()->user()->role == 'Pembina Eskul') {
            return $next($request);
        } else {
            return redirect()->route('admin_login')->with('error', 'Unauthorized role.');
        }
    }
}
