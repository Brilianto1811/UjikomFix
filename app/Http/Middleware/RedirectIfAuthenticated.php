<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string  ...$guards
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function handle(Request $request, Closure $next, string ...$guards): Response
    {
        $guards = empty($guards) ? [null] : $guards;

        // Memeriksa setiap guard yang diberikan
        foreach ($guards as $guard) {
            if ($guard && Auth::guard($guard)->check()) {
                $user = Auth::guard($guard)->user();

                if ($user->status_akun == 1) {
                    return redirect()->route('dashboardOverview2');
                }

                if ($user->status_akun == 2) {
                    return redirect()->route('dashboardOverview3');
                }

            }
        }

        return $next($request);
    }
}
