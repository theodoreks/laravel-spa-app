<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kritik extends Model
{
    protected $table = 'kritik';
    protected $fillable = ['nama', 'hp', 'kritik'];
    public $timestamps = false; 
}