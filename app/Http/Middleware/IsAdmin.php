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
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check()) {

            $user = Auth::user();

            if ($user->getRoleNames()[0]->name == 'Admin') {
                return $next($request);
            } else {
                abort(404);
            }

        } else {
            return redirect()->route('login_register');
        }
    }
}
