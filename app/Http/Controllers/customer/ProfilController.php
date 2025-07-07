<?php

namespace App\Http\Controllers\customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // Jangan lupa tambahkan ini

class ProfilController extends Controller
{
    /**
     * dan ambil data user yang sedang login.
     */
    public function index()
    {
       
        $user = Auth::user();

       
        return view('customer.profil', compact('user'));
    }
}