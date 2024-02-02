@extends('layouts.guest')

@section('content')
<div class="mt-10">
   <div class="my-6 pb-6">
    <h1 class="text-center my-6 text-5xl">Welcome to <span class="text-yellow-500 capitalize"><strong>E-commerce</strong></span></h1>
</div>  
<div class="flex justify-center my-6 w-full">
    
    <form action="{{ route('welcome.search') }}" method="GET" class="mb-4">
        <div class="flex ">
        <div class="form-groupe mx-6">
        <input type="text" class="form-controle rounded " name="query" oninput="this.form.submit()" placeholder="Search...">
    </div>
    
</div>
    </form></div> 
    <div class="container">
<div class="flex  justify-center  w-full border mx-3 shadow">
    @foreach ($recetes as $recete)
        <div class=" w-200 p-2">
            <div class="bg-white  rounded-lg  shadow-md">
                <img src="{{ asset('storage/' . $recete->image) }}"  class="w-full h-48  object-cover" alt="Product Image">
            <div class="p-4">
                    <h5 class="text-xl font-semibold mb-2">{{ $recete->title }}</h5>
                    <ul class="list-none">
                        <li class="mb-2">Category: {{ $recete->category->name }}</li>
                    </ul>
                </div>
            <div class="p-6 ">
                    <div class="text-gray-600 ">Created at: {{ $recete->created_at }}</div>
                    <div class="text-gray-600 my-3">Created by: {{ $recete->User->name }}</div>
                    
                
                <div class="my-6 flex justify-center">
                    <a href="{{ route('welcome.show', ['recete' => $recete]) }}" class="bg-blue-500 hover:bg-blue-700 text-white px-2 py-1 rounded-md shadow">Show more</a>
                </div>
            </div>
            </div>
        </div>
    @endforeach
</div>
</div>
</div>
{{-- <div><a href="{{ route('home.all') }}">See All Products</a></div> --}}
                    
@endsection 
