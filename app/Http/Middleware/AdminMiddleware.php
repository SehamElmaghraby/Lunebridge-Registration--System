<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (auth()->user() && auth()->user()->is_admin) {
            return $next($request);
        }
        abort(403, 'Unauthorized action.');
    }

    // public function handle(Request $request, Closure $next): Response
    // {
    //     if (Auth::guard('web')->check()) {
    //         return redirect(route('dashboard', absolute: false));
    //     } else if (Auth::guard('admin')->check())
    //         return redirect(route('admin-dashboard', absolute: false));
    //     return $next($request);
    // }
}
