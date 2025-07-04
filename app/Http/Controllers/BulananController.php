<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BulananController extends Controller
{
    public function index()
    {
        return view('aktivitas.karyawan2');
    }
}
