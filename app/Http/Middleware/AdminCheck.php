<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;

class AdminCheck
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
        $isAdmin = $request->user() ? $request->user()->isAdmin() : false;

        if (Auth::check() && $isAdmin) {
            return $next($request);
        }

        // abort(404);
        return redirect('/login');
    }

}
