<?php

namespace App\Http\Controllers;

use App\Models\categories;
use Illuminate\Http\Request;
use App\Http\Requests\categoryrequest;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $categories=  categories::all();
        
        return view('categories.index' , compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(categoryrequest $request)
    {
       $formefiled=$request->validated();
       categories::create([
        'name'=>$formefiled['catname'],
       ]);
       return redirect(route('categories.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(categories $categories)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(categories $category)
    {
        return view('categories.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(categoryrequest $request, categories $category)
    {
          $cat=categories::find($category->id);
         
        $formfield=$request->validated();
        $cat->name=$formfield['catname'];
          $cat->save();
          return redirect(route('categories.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(categories $category)
    {
        $cat=categories::find($category->id);
        $cat->delete();
        return redirect(route('categories.index'));

    }
}
