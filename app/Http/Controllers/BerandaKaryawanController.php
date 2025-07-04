<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Inventory;

class BerandaKaryawanController extends Controller
{
    public function index()
    {
        $data = Inventory::orderBy('tanggal', 'desc')->take(5)->get(); // ambil 5 data terbaru
        return view('berandakaryawan.karyawan', compact('data'));
    }
}
