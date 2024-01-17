<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class adminauth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(auth()->user()){
            if(auth()->user()->role == 'admin'){
                return $next($request);

            }else if(auth()->user()->role == 'user'){
                return response('You are not allowed to this page');

            }else{
                return response('Error');
            }
        }else{
            return response('Please Login');

        }


        return $next($request);
    }
}
