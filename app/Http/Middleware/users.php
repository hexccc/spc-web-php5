<?php

namespace App\Http\Middleware;

use Closure;

class users
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
        if($request->session()->get('name') === null)
        {
            return redirect('/admin-login');
        }
        elseif($request->session()->get('status'))
        {
           
        }
        return $next($request);
    }
}
