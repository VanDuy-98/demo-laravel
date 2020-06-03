<?php

namespace App\Http\Middleware;

use Closure;

class checkTokenMiddleware
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
        if ($request->path() != "login")
        {
            if (!isset($request->token))
            {
                return redirect('login');
            }
        }
        return $next($request);
    }
}
