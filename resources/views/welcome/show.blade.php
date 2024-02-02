@extends('layouts.guest')

@section('content')

<div class="w-full my-4 h-auto">
    <div class="bg-white rounded-lg overflow-hidden shadow-md max-w-3xl mx-auto flex">
        <img src="{{ asset('storage/' . $recete->image) }}" class="object-cover h-full w-1/2" alt="Image">
        <div class="p-6 w-1/2">
            <h5 class="text-3xl font-semibold mb-4">{{ $recete->title }}</h5>
            <ul class="list-none">
                <li class="mb-2">{{ $recete->description }}</li>
                <li class="mb-2">{{ $recete->category->name }}</li>
            </ul>
            <div class="flex justify-between items-center mt-4">
                <span class="text-gray-600">Created at: {{ $recete->created_at }}</span>
            </div>
            <div class="flex bg-gray-200 p-2 rounded   items-center mt-4">
                <div class=" rounded-full px-3">
                    <img src="/storage/recete/c5a04a9b9926aabea5488f72acf99e79.jpg" class="rounded-full h-16 w-16 object-cover" alt="user">
                </div>
                <span class="text-gray-600"> {{ $recete->User->name }}</span>
            </div>
        </div>
    </div>
    <div class="flex justify-center my-2">
        <a href="{{ route('home') }}" class="bg-blue-500 rounded text-white font-bold p-1">back to home</a>
    </div>
</div>

@endsection
