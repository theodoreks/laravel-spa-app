<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    // ... (fungsi loginForm, login, dan logout tetap sama) ...
    public function loginForm()
   {
  return view('login.login'); 
 }
    public function login(Request $request)
  {
  $credentials = $request->validate([
 'username' => 'required|string',
  'password' => 'required|string',
  ]);
 $user = User::where('username', $credentials['username'])->first();
 if (!$user || !Hash::check($credentials['password'], $user->password)) {
 return back()->withErrors(['username' => 'Username atau password salah.'])->withInput();
 }
  Auth::login($user);
  $request->session()->regenerate();
  return match ($user->role) {
 'owner'  => redirect()->intended(route('owner.dashboard')),
 'karyawan' => redirect()->intended(route('karyawan.dashboard')),
'customer' => redirect()->intended(route('customer.beranda')),
 default  => redirect('/login')->withErrors(['username' => 'Role tidak dikenali.']),
  };
 }

    public function logout(Request $request)
  {
 Auth::logout();
 $request->session()->invalidate();
$request->session()->regenerateToken();
 return redirect('/');
  }

    public function registerForm()
    {
        return view('login.register');
    }

    /**
     * Menangani proses registrasi user baru.
     */
  public function register(Request $request)
{
    // 1. Validasi input
    $request->validate([
        'nama_lengkap'  => 'required|string|max:100',
        'jenis_kelamin' => 'required|in:Laki-Laki,Perempuan',
        'no_hp'         => 'required|string|max:20',
        'username'      => 'required|string|unique:users,username|max:50',
        'password'      => 'required|string|min:6|confirmed',
    ]);

    // 2. Buat user baru
    $user = User::create([
        'nama_lengkap'  => $request->nama_lengkap,
        'jenis_kelamin' => $request->jenis_kelamin,
        'no_hp'         => $request->no_hp,
        'username'      => $request->username,
        'password'      => Hash::make($request->password),
        'role'          => 'customer', 
    ]);

    // 3. TAMBAHKAN BARIS INI
    // Assign the role using the Spatie package method
    $user->assignRole('customer');

    // Redirect to the login page with a success message.
    return redirect()->route('login')->with('success', 'Registrasi berhasil! Silakan login.');
}
}