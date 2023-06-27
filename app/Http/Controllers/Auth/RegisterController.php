<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{

    // Register view
    public function index()
    {
        return view('auth.register');
    }

    // Register logic
    public function register(Request $request)
    {
        // Validasi input dari request
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        // Buat user baru
        User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
        ]);

        // // Autentikasi user 
        // auth()->login($user);

        // Redirect ke halaman setelah registrasi berhasil
        return redirect('/login');
    }
}
