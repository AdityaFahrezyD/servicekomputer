<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class CustomerAuthController extends Controller
{
    // Menampilkan form registrasi
    public function showRegisterForm()
    {
        return view('auth.customer.customer-register');
    }

    // Proses registrasi
    public function register(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:customers',
            'nama' => 'required|string|max:100',
            'alamat' => 'required|string|max:100',
            'hp' => 'required|string|max:15',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Membuat pelanggan baru
        Customer::create([
            'email' => $request->email,
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'hp' => $request->hp,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('landing')->with('success', 'Registrasi berhasil');
    }



    // Menampilkan form login
    public function showLoginForm()
    {
        return view('auth.customer.customer-login');
    }

    // Proses login
    public function login(Request $request)
{
    $request->validate([
        'email' => 'required|email',
        'password' => 'required|string',
    ]);

    // Verifikasi login dengan guard customer
    if (Auth::guard('customer')->attempt(['email' => $request->email, 'password' => $request->password])) {
        // Login berhasil
        return redirect()->route('landing');
    } else {
        // Login gagal
        return back()->withErrors(['email' => 'Email atau password salah.']);
    }
}


    // Logout customer
    public function logout()
    {
        Auth::guard('customer')->logout();
        return redirect()->route('landing');
    }
}

