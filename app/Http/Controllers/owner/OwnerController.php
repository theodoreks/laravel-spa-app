<?php

// Change this line
namespace App\Http\Controllers\owner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OwnerController extends Controller
{
    public function index()
    {
        return view('Owner.dashboard');
    }
}