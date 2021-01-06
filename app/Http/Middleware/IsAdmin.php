<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {


        $user = Auth::user();

        if (!$user->isAdmin()) {
            # code...
            return \redirect('/');
        }


        // if ($user->isAdmin()) {
        // # code...
        // echo "this user is an administrator,,,yeah! it works now!!!!!";
        // }else{
        // echo "whooops! This user is not an administrator";
        // }


        return $next($request);
    }
}
