<?php

namespace App\Http\Middleware;

use Closure;

class IsAdmin
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
      if (!\Auth::check() || !\Auth::user()->is_admin) {
            return redirect('/smarteate/home');
        }
        return $next($request);
    }
}
