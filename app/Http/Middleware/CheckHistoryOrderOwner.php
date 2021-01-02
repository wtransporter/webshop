<?php

namespace App\Http\Middleware;

use Closure;

class CheckHistoryOrderOwner
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
        if ($request->user->id != auth()->id()) {
            abort(403, 'Access Denied');
        }
        
        return $next($request);
    }
}
