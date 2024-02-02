<?php

namespace App\Http\Controllers;

use App\Models\recets;
use App\Models\categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\recetesrequest;
class RecetsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $recetes=recets::where('user_id',Auth::id())->get();
       return view('recetes.index',compact('recetes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories=  categories::all();
        return view('recetes.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(recetesrequest $request)
    {
       $formefield= $request->validated();
       if($request->hasFile('image')){
        $formefield['image']=$request->file('image')->store('recete','public');
        
    }    
       recets::create([
        'title' => $formefield['recete_name'],
        'description' => $formefield['description'],
        'image' => $formefield['image'],
        'categories_id'=>$request->input('categories_id'),
        'user_id' => Auth::id(),
    ]);
        return to_route('recetes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(recets $recete)
    {
        return view('recetes.show',compact('recete'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(recets $recete)
    { 
        $categories=categories::all();
     
        return view('recetes.edit',compact('recete','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(recetesrequest $request, recets $recete)
    {

       $recet= recets::find($recete->id);
      
       $formfield=$request->validated();
       if($request->hasFile('image')){
        $formfield['image']=$request->file('image')->store('product','public');
        
    }  else{
        $formfield['image']=$request->input('image');
    }
   
    $recet->title = $formfield['recete_name'] ;
    $recet->description = $formfield['description'] ;
    $recet->image = $formfield['image'] ;
    $recet->categories_id = $request->input('categories_id') ;
    $recet->save();
    return to_route('recetes.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(recets $recete)
    {
        $recet= recets::find($recete->id);
        $recet->delete();
        return to_route('recetes.index');
    }
}
