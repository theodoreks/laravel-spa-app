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

    // Attempt to log the user in
    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();
        $user = Auth::user();

        // Check the user's role and redirect accordingly
        return match ($user->role) {
            'owner'    => redirect()->intended(route('owner.dashboard')),
            'karyawan' => redirect()->intended(route('karyawan.dashboard')),
            'customer' => redirect()->intended(route('customer.beranda')),
            default    => redirect('/'), // Fallback redirect
        };
    }

    // If login fails, return back with an error
    return back()->withErrors([
        'username' => 'The provided credentials do not match our records.',
    ])->onlyInput('username');
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
    $request->validate([
        'nama_lengkap'  => 'required|string|max:100',
        'jenis_kelamin' => 'required|in:Laki-Laki,Perempuan',
        'no_hp'         => 'required|string|max:20',
        'username'      => 'required|string|unique:users,username|max:50',
        'password'      => 'required|string|min:6|confirmed',
    ]);

    // Create the user
    $user = User::create([
        'nama_lengkap'  => $request->nama_lengkap,
        'jenis_kelamin' => $request->jenis_kelamin,
        'no_hp'         => $request->no_hp,
        'username'      => $request->username,
        'password'      => Hash::make($request->password),
        'role'          => 'customer', 
    ]);

    // Assign the role using the Spatie package
    $user->assignRole('customer');

    // Redirect to the login page with a success message
    return redirect()->route('login')->with('success', 'Registration successful! Please log in.');
}


}