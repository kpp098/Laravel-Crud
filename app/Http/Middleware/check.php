<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class check
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    { 
        if($request->age && $request=='a'){
            return redirect('k');
        }
        else{
            return redirect('no');
        }
        return $next($request);
     }
}
