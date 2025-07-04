<?php

namespace App\Http\Controllers\customer;

use App\Http\Controllers\Controller; 
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function profil(){
        return view('customer.profil');
    }
}