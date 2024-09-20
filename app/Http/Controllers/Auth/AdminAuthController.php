<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AdminAuthController extends Controller
{

    public function showRegisterForm()
    {
        return view('auth.admin.admin-register');
    }

    // Proses registrasi
    public function register(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:100',
            'alamat' => 'required|string|max:100',
            'hp' => 'required|string|max:15',
            'username' => 'required|string|max:100|unique:admins',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Membuat admin baru
        Admin::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'hp' => $request->hp,
            'username' => $request->username,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('admin.login')->with('success', 'Registrasi berhasil, silahkan login.');
    }


    public function showLoginForm()
    {
        return view('auth.admin.admin-login'); // Pastikan ini sesuai dengan file yang ada
    }


    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        if (Auth::guard('admin')->attempt(['username' => $request->username, 'password' => $request->password])) {
            return redirect()->route('admin.dashboard');
        }

        return back()->withErrors(['username' => 'Username atau password salah.']);
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }
}
