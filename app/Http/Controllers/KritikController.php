<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KritikController extends Controller
{
    public function kritik(){
        return view('kritik');
    }
}