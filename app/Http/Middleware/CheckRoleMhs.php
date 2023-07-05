<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckRoleMhs
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

        // Periksa jika pengguna memiliki peran 'mahasiswa' 
        if ($user->role === 'mhs') {
            return $next($request);
        } else {
            return redirect('/dosen/dashboard');
        }
    }
}
