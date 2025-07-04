<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataKaryawanController extends Controller
{
    public function index()
    {
        return view('Owner.data_karyawan');
    }
}
