<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        return view('customer.dashboard'); // pastikan view-nya ada di resources/views/Customer/dashboard.blade.php
    }
}
