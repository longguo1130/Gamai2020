<?php

namespace App\Http\Middleware;

use App\User;
use Closure;

class AdminMiddleware
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
        if(!User::isAdmin()){
            abort(403,'Whoops, you must be an admin to view this page.');
        }

        return $next($request);
    }
}
