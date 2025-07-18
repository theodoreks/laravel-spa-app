<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class KaryawanController extends Controller
{
    public function index()
    {
        $karyawan = User::where('role', 'karyawan')->get();
        return view('Owner.datakaryawan', compact('karyawan'));
    }

    // Form tambah karyawan
    public function create()
    {
        return view('Owner.tambahkaryawan');
    }

    // Simpan data karyawan baru
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_lengkap' => 'required|string|max:100',
            'jenis_kelamin' => 'required|in:Laki-Laki,Perempuan',
            'no_hp' => 'required|string|max:20',
            'username' => 'required|string|max:50|unique:users,username',
            'password' => 'required|string|min:6|confirmed',
        ]);

        $validated['role'] = 'karyawan';
        $validated['password'] = Hash::make($validated['password']);

        User::create($validated);

        return redirect()->route('owner.karyawan.index')->with('success', 'Data karyawan berhasil ditambahkan.');
    }

    // Form edit
    public function edit($id)
    {
        $karyawan = User::where('role', 'karyawan')->findOrFail($id);
        return view('Owner.editkaryawan', compact('karyawan'));
    }

    // Simpan perubahan
    public function update(Request $request, $id)
    {
        $karyawan = User::where('role', 'karyawan')->findOrFail($id);

        $validated = $request->validate([
            'nama_lengkap' => 'required|string|max:100',
            'jenis_kelamin' => 'required|in:Laki-Laki,Perempuan',
            'no_hp' => 'required|string|max:20',
            'username' => 'required|string|max:50|unique:users,username,' . $karyawan->id,
        ]);

        $karyawan->update($validated);

        return redirect()->route('owner.karyawan.index')->with('success', 'Data karyawan berhasil diperbarui.');
    }

    // Hapus
    public function destroy($id)
    {
        $karyawan = User::where('role', 'karyawan')->findOrFail($id);
        $karyawan->delete();

        return redirect()->route('owner.karyawan.index')->with('success', 'Data karyawan berhasil dihapus.');
    }
}
