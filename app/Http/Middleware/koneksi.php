<?php

namespace App\Http\Middleware;

use Closure;

class koneksi
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
      if(session()->get('username') != NULL){
          return $next($request);
      }
      return redirect('/');
    }
}
