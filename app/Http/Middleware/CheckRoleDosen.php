<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckRoleDosen
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Mendapatkan pengguna yang sedang terotentikasi
        $user = $request->user();

        // Periksa jika pengguna memiliki peran 'dosen'
        if ($user->role === 'dosen') {
            return $next($request);
        } else {
            return redirect('/mhs/dashboard');
        }
    }
}
