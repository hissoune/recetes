@extends('layouts.app')
@section('title', 'categories')

@section('content')
    <div class="">
        <a href="{{ route('categories.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-4 rounded">Add</a>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-4 mt-4">
            @foreach ($categories as $category)
                <div class="bg-white overflow-hidden shadow-md rounded-lg">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">{{ $category->name }}</div>
                        <p class="text-gray-700 text-base">{{ $category->created_at }}</p>
                    </div>
                    <div class="px-6 pt-4 pb-2">
                        <a href="{{ route('categories.edit', $category) }}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-1 px-2 rounded">Edit</a>
                        <form action="{{ route('categories.destroy', $category) }}" method="post" class="inline-block">
                            @csrf
                            @method('delete')
                            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded">Delete</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
