
@extends('layouts.app')

@section('content')

    <div class="w-full my-4 h-auto">
        <div class="bg-white rounded-lg overflow-hidden shadow-md">
            <img src="{{ asset('storage/' . $recete->image) }}" class="w-full h-64 object-cover" alt="Image">
            <div class="p-6"> <!-- Increased padding for content -->
                <h5 class="text-2xl font-semibold mb-4">{{ $recete->titlee }}</h5>
                <ul class="list-none">
                    <li class="mb-2">{{ $recete->descripti }}</li>
                    <li class="mb-2">{{ $recete->category->name }}</li>
                </ul>
            </div>
            <div class="p-4 flex justify-between items-center">
                <span class="text-gray-600">Created at: {{ $recete->created_at }}</span>
            </div>
        </div>
    </div>
    
@endsection
