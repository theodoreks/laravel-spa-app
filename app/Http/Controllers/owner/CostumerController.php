<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CostumerController extends Controller
{
    public function index()
    {
        return view('costumer.dashboard'); // pastikan view-nya ada di resources/views/costumer/dashboard.blade.php
    }
}
