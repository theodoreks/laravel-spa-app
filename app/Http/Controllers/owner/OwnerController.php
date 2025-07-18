<?php

namespace App\Http\Controllers\owner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Inventory;

class OwnerController extends Controller
{
    public function index()
    {
        $data = Inventory::latest()->limit(5)->get(); // Ambil data inventory terbaru
        return view('Owner.dashboard', compact('data')); // Kirim data ke view
    }
}
