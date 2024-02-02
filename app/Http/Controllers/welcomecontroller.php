<?php

namespace App\Http\Controllers;

use App\Models\recets;
use App\Models\categories;
use Illuminate\Http\Request;

class welcomecontroller extends Controller
{
    public function index()
    {   
        
       $recetes=recets::all();
       
       return view('welcome.welcome',compact('recetes'));
    }
    public function search(Request $request)
{
    $query = $request->input('query');

    if (!$query) {
        $recetes=recets::all();
        return view('welcome.welcome',compact('recetes'));
    }else{

    $recetes = recets::join('categories', 'recets.categories_id', '=', 'categories.id')
    ->where('recets.title', 'like', '%' . $query . '%')
    ->orWhere('recets.description', 'like', '%' . $query . '%')
    ->orWhere('categories.name','like','%'. $query . '%')
    ->get();

    return view('welcome.welcome',compact('recetes'));}
}
public function show(recets $recete){
    
         return view('welcome.show',compact('recete'));
}

public function statistique(){
    $recetes=recets::all();
    $cats = categories::all();
    $recet=count($recetes);
    $cat=count($cats);
    return view('dashboard',compact('recet','cat'));
}
}
