<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Auth;

class userMiddle
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(!(Auth::user()->userType === 'user') || 0){
            
            return redirect()->route('home');
        }
        elseif(!Auth::check()){
            return redirect()->route('login');

        }
        return $next($request);
    }
}
