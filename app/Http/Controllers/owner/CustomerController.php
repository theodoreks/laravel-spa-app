<?php

namespace App\Http\Controllers\owner; // Perbaiki namespace

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User; // Import model User

class CustomerController extends Controller
{
    public function index()
    {
        // Ambil semua user dengan role 'customer'
        $customers = User::where('role', 'customer')->get();
        

        // Tampilkan view daftar customer untuk owner dan kirim datanya
        return view('Owner.datacustomer', compact('customers'));
    }
}
