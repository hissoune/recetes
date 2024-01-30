@extends('layouts.app')

@section('content')

<a href="{{ route('recetes.create') }}" class="bg-blue-500  hover:bg-blue-700 text-white font-bold py-1 px-4 rounded">Add</a>

<table class="table table-responsive bg-light my-2 shadow">
    <thead>
        <tr>
            <th class="px-4 py-2">ID</th>
            <th class="px-4 py-2">Name</th>
            <th class="px-4 py-2">Description</th>
            <th class="px-4 py-2">category</th>
            <th class="px-4 py-2">Image</th>
            <th class="px-4 py-2">Created At</th>
            <th class="px-4 py-2">Action</th>
        </tr>
    </thead>
    <tbody>
        @forelse($recetes as $recete)
            
       
        <tr>
            <td class="border px-4 py-2">{{ $recete->id }}</td>
            <td class="border px-4 py-2">{{ $recete->title }}</td>
            <td class="border px-4 py-2">{{ $recete->description }}</td>
            <td class="border px-4 py-2">{{ $recete->category->name }}</td>
            <td class="border px-4 py-2">
                <img class="w-16 h-16" src="{{ asset('storage/' . $recete->image) }}" alt="img">
            </td>
            <td class="border px-4 py-2">{{ $recete->created_at }}</td>
            <td class="border px-4 py-2 space-x-2">
                <a href="{{ route('recetes.show', $recete) }}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-1 px-2 rounded">Show</a>
                <a href="{{ route('recetes.edit', $recete) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded">Edit</a>
                <form action="{{ route('recetes.destroy', $recete) }}" method="post" class="inline-block">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded">Delete</button>
                </form>
            </td>
       
        @empty
        <td colspan="6" class="border   px-4 py-2 text-center">no recetes founds..</td>

    </tr>
        @endforelse 
    </tbody>
</table>

{{-- <x-categories :categories='$categories' /> --}}

@endsection
