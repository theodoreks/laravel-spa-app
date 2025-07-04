<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    /**
     * Menampilkan form login.
     */
    public function loginForm()
    {
        return view('login.login'); // Pastikan view ada di resources/views/auth/login.blade.php
    }

    /**
     * Menangani proses login.
     */
    public function login(Request $request)
    {
        // 1. Validasi input
        $credentials = $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        // 2. Cari user berdasarkan username
        $user = User::where('username', $credentials['username'])->first();

        // 3. Jika user tidak ada atau password salah, kembalikan dengan error
        if (!$user || !Hash::check($credentials['password'], $user->password)) {
            return back()->withErrors(['username' => 'Username atau password salah.'])->withInput();
        }

        // 4. Jika berhasil, login kan user
        Auth::login($user);
        $request->session()->regenerate();

        // 5. Arahkan berdasarkan role menggunakan nama rute dari web.php
        return match ($user->role) {
            'owner'     => redirect()->intended(route('owner.dashboard')),
            'karyawan'  => redirect()->intended(route('karyawan.dashboard')),
            'pelanggan' => redirect()->intended(route('customer.beranda')),
            default     => redirect('/login')->withErrors(['username' => 'Role tidak dikenali.']),
        };
    }

    /**
     * Menampilkan form registrasi.
     */
    public function registerForm()
    {
        return view('login.register'); // Pastikan view ada di resources/views/auth/register.blade.php
    }

    /**
     * Menangani proses registrasi user baru (pelanggan).
     */
    public function register(Request $request)
    {
        $request->validate([
            'nama_lengkap' => 'required|string|max:100',
            'jenis_kelamin' => 'required|in:Laki-Laki,Perempuan',
            'no_hp' => 'required|string|max:20',
            'username' => 'required|string|unique:users,username|max:50',
            'password' => 'required|string|min:6|confirmed',
        ]);

        $user = User::create([
            'nama_lengkap' => $request->nama_lengkap,
            'jenis_kelamin' => $request->jenis_kelamin,
            'no_hp' => $request->no_hp,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'role' => 'pelanggan', // Registrasi default sebagai pelanggan
        ]);

        // Login user yang baru terdaftar
        Auth::login($user);

        // Arahkan ke halaman beranda customer
        return redirect()->route('customer.beranda');
    }

    /**
     * Menangani proses logout.
     */
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
