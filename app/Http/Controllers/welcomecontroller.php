<?php

namespace App\Http\Controllers;

use App\Models\recets;
use Illuminate\Http\Request;

class welcomecontroller extends Controller
{
    public function index()
    {
       $recetes=recets::all();
       return view('welcome',compact('recetes'));
    }
}
