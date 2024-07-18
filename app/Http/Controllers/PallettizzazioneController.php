<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PallettizzazioneController extends Controller
{
    public function index()
    {
        return view('pallettizzazione');
    }
}
