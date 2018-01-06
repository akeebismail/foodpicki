<?php

namespace App\Http\Middleware;

use Closure;

class AdminWare
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @param $guard
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!auth()->guard('admin')->check() && !auth()->user()->role_id == 2) {
            return redirect('admin/login');
        }
        return $next($request);
    }
}
