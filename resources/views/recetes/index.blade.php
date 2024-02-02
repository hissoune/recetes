@extends('layouts.app')
@section('title', 'Recetes')
@section('content')

<a href="{{ route('recetes.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-4 rounded">Add</a>

<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-4 mt-4">    @forelse ($recetes as $recete)
    <div class="bg-white overflow-hidden shadow-md rounded-lg">
        <img class="w-full h-64 object-cover" src="{{ asset('storage/' . $recete->image) }}" alt="Recipe Image">
        <div class="px-6 py-4">
            <div class="font-bold text-xl mb-2">{{ $recete->title }}</div>
            <p class="text-gray-700 text-base">{{ $recete->description }}</p>
            <p class="text-gray-700 text-base">Category: {{ $recete->category->name }}</p>
            <p class="text-gray-700 text-base">Author: {{ $recete->user->name }}</p>
            <p class="text-gray-700 text-base">Created At: {{ $recete->created_at }}</p>
        </div>
        <div class="px-6 pt-4 pb-2">
            <a href="{{ route('recetes.show', $recete) }}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-1 px-2 rounded">Show</a>
            <a href="{{ route('recetes.edit', $recete) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded">Edit</a>
            <form action="{{ route('recetes.destroy', $recete) }}" method="post" class="inline-block">
                @csrf
                @method('delete')
                <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded">Delete</button>
            </form>
        </div>
    </div>
    @empty
    <div class="bg-white  shadow-md rounded-lg col-span-4">
        <div class="px-6 py-4 text-center">
            <p class="text-gray-700 text-base">No recetes found.</p>
        </div>
    </div>
    @endforelse
</div>

@endsection
