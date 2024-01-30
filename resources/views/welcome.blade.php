@extends('layouts.guest')

@section('content')
      
<h1 class="text-center my-3">Welcome to <span class="text-warning capitalize"><strong>E-commerce</strong></span></h1>
<h3>Last Products</h3>
<div class="flex flex-wrap w-full">
    @foreach ($recetes as $recete)
        <div class="w-50 sm:w-1/2 md:w-1/3 lg:w-1/2 xl:w-1/4 p-2">
            <div class="bg-white rounded-lg overflow-hidden shadow-md">
                <img src="{{ asset('storage/' . $recete->image) }}" class=" aspect-w-16  object-cover" alt="Product Image">
                <div class="p-4">
                    <h5 class="text-xl font-semibold mb-2">{{ $recete->title }}</h5>
                    <ul class="list-none">
                        <li class="mb-2">{{ $recete->description }}</li>
                        <li class="mb-2">Category: {{ $recete->category->name }}</li>
                    </ul>
                </div>
                <div class="p-4 flex justify-between items-center">
                    <span class="text-gray-600">Created at: {{ $recete->created_at }}</span>
                    <div>
                        <a href="{{ route('recetes.show', $recete) }}" class="bg-blue-500 hover:bg-blue-700 text-white px-2 py-1 rounded-md shadow">Show more</a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
{{-- <div><a href="{{ route('home.all') }}">See All Products</a></div> --}}
                    
@endsection
