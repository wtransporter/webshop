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
            return redirect('login')->with([
                'message' => 'You have to be logged in to view this page',
                'type' => 'danger'
            ]);
        }
        
        return $next($request);
    }
}
