<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EventKegiatan;
use Illuminate\Support\Facades\Storage;

class EventKegiatanController extends Controller
{
    public function index()
    {
        $events = EventKegiatan::all(); 
        return view('event.event', compact('events')); 
    }


    public function create()
    {
        return view('event.tambah');
    }

    public function store(Request $request)
    {
        $request->validate([
            'tema' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'tanggal' => 'required|date',
            'lokasi' => 'required|string|max:255',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $data = $request->only(['tema', 'deskripsi', 'tanggal', 'lokasi']);

        if ($request->hasFile('foto')) {
            $data['foto'] = $request->file('foto')->store('event_foto', 'public');
        }

        EventKegiatan::create($data);

        return redirect()->route('event.index')->with('success', 'Event berhasil ditambahkan.');
    }

    public function edit($id)
{
    $event = EventKegiatan::findOrFail($id); // ambil data berdasarkan id
    return view('event.edit', compact('event')); // kirim ke view
}

    public function update(Request $request, $id)
    {
        $event = EventKegiatan::findOrFail($id);

        $request->validate([
            'tema' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'tanggal' => 'required|date',
            'lokasi' => 'required|string|max:255',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $data = $request->only(['tema', 'deskripsi', 'tanggal', 'lokasi']);

        if ($request->hasFile('foto')) {
            // Hapus foto lama jika ada
            if ($event->foto && Storage::disk('public')->exists($event->foto)) {
                Storage::disk('public')->delete($event->foto);
            }
            $data['foto'] = $request->file('foto')->store('event_foto', 'public');
        }

        $event->update($data);

        return redirect()->route('event.index')->with('success', 'Event berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $event = EventKegiatan::findOrFail($id);

        // Hapus foto
        if ($event->foto && Storage::disk('public')->exists($event->foto)) {
            Storage::disk('public')->delete($event->foto);
        }

        $event->delete();

        return redirect()->route('event.index')->with('success', 'Event berhasil dihapus.');
    }
}
