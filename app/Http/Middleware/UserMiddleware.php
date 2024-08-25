<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class UserMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        // Pengecekan untuk admin
        if (Auth::guard('admin')->check()) {
            if (Auth::guard('admin')->user()->status_akun == 1) {
                return $next($request);
            }
        }

        // Pengecekan untuk mahasiswa
        if (Auth::guard('mahasiswa')->check()) {
            if (Auth::guard('mahasiswa')->user()->status_akun == 2) {
                return $next($request);
            }
        }

        // Jika tidak memenuhi syarat di atas, arahkan ke halaman login dengan pesan error
        return redirect()->route('login')->withErrors('Unauthorized');
    }
}
