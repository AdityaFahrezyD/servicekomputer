<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Teknisi;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class TeknisiAuthController extends Controller
{
    public function showRegisterForm()
    {
        return view('auth.teknisi.teknisi-register');
    }

    // Proses registrasi
    public function register(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:100',
            'alamat' => 'required|string|max:100',
            'hp' => 'required|string|max:15',
            'username' => 'required|string|max:100|unique:teknisis',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Membuat teknisi baru
        Teknisi::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'hp' => $request->hp,
            'username' => $request->username,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('teknisi.login')->with('success', 'Registrasi berhasil, silahkan login.');
    }

    public function showLoginForm()
    {
        return view('auth.teknisi.teknisi-login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        if (Auth::guard('teknisi')->attempt(['username' => $request->username, 'password' => $request->password])) {
            return redirect()->route('teknisi.dashboard');
        }

        return back()->withErrors(['username' => 'Username atau password salah.']);
    }

    public function logout()
    {
        Auth::guard('teknisi')->logout();
        return redirect()->route('teknisi.login');
    }
}
