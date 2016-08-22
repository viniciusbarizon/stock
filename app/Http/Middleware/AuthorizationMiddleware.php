<?php

namespace stock\Http\Middleware;

use Closure;

class AuthorizationMiddleware
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
        if ( !$request->is('auth/login') && \Auth::guest () )
        {
            return redirect ( '/auth/login' );
        }

        return $next($request);
    }
}
