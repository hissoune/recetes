@extends('layouts.app')

@section('content')
    <div class="my-6">
        <a href="{{ route('categories.create') }}" class="btn-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add</a>
        <table class="table-auto bg-gray-100 my-2 shadow">
            <thead>
                <tr>
                    <th class="px-4 py-2">ID</th>
                    <th class="px-4 py-2">Name</th>
                    <th class="px-4 py-2">Created At</th>
                    <th class="px-4 py-2">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                <tr>
                    <td class="border px-4 py-2">{{ $category->id }}</td>
                    <td class="border px-4 py-2">{{ $category->name }}</td>
                    <td class="border px-4 py-2">{{ $category->created_at }}</td>
                    <td class="border px-4 py-2">
                        <a href="{{ route('categories.show', $category) }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-1 px-2 rounded">Show</a>
                        <a href="{{ route('categories.edit', $category) }}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-1 px-2 rounded">Edit</a>
                        <form action="{{ route('categories.destroy', $category) }}" method="post" class="inline-block">
                            @csrf
                            @method('delete')
                            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
