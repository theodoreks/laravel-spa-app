<?php

namespace App\Http\Controllers\customer;

use App\Http\Controllers\Controller;
use App\Models\EventKegiatan; 
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function event()
    {
       
        $events = EventKegiatan::orderBy('tanggal', 'desc')->get();

        
        return view('customer.event', compact('events'));
    }
}