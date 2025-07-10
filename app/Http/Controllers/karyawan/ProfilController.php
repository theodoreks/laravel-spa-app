<?php

namespace App\Http\Controllers\karyawan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class ProfilController extends Controller
{
    /**
     * Show the profile page for the logged-in employee.
     */
    public function index()
    {
        $user = Auth::user(); // Gets the currently logged-in user
        return view('profil.profil', compact('user'));
    }

    /**
     * Update the profile for the logged-in employee.
     */
    public function update(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            // Ensures the username is unique, ignoring the current user's own username
            'username'     => ['required', 'string', 'max:255', Rule::unique('users')->ignore($user->id)],
            'no_hp'        => 'required|string|max:20',
        ]);

        $user->update($request->only('nama_lengkap', 'username', 'no_hp'));

        // Redirects to the KARYAWAN's profile page with a success message
        return redirect()->route('karyawan.profil.index')->with('success', 'Profil berhasil diperbarui.');
    }
}
