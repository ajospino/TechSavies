<?php namespace App\Http\Middleware;

use Closure;

class CheckRoleMiddleware
{
    public function handle($request, Closure $next)
    {
        //User role is admin
        if (Auth::check() && Auth::user()->isAdmin()) {
            return $next($request);
        }

        //If user role is student
        if (Auth::check() && auth()->user()->type == 0) {
            return view("home.indexUser");
        }

        //If user role is teacher
        if (Auth::check() && auth()->user()->type == 1) {
            return view("home.index");
        }
        //default redirect
        return redirect("home");
    }
}
