<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OwnerController extends Controller
{
    public function index()
    {
        return view('owner.dashboard'); // pastikan view-nya ada di resources/views/owner/dashboard.blade.php
    }
}
