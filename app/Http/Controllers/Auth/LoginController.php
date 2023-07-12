<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    // Login view
    public function index()
    {
        return view('auth.login', [
            'title' => 'Login'
        ]);
    }


    // Login logic
    public function login(Request $request)
    {
        // Validasi input dari request
        $credentials = $request->validate([
            'nomor_induk' => 'required',
            'password' => 'required',
        ]);

        // Proses autentikasi
        if (auth()->attempt($credentials)) {
            // Autentikasi berhasil
            $user = auth()->user();
            $role = $user->role; // Mengambil isi field "role"

            // Mengecek role
            if ($role == 'mhs') {
                return redirect()->intended('/mhs/dashboard');
            }
            return redirect()->intended('/dosen/dashboard');
        } else {
            // Autentikasi gagal
            return back()->withErrors([
                'nomor_induk' => 'Invalid credentials.',
            ]);
        }
    }


    // Logout Logic
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
