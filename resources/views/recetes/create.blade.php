@extends('layouts.app')

@section('content')
<div class="container">
    <div class="bg-white rounded-lg shadow-md mx-auto max-w-xl">

        <!-- Card body -->
        <div class="p-6">

            <form action="{{ route('recetes.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <p class="text-2xl font-semibold text-center mb-4">Add Product</p>

                <div class="mb-4">
                    <label for="recete_name" class="block text-gray-600 text-sm font-medium mb-2">Title</label>
                    <input type="text" name="recete_name" id="recete_name"
                        class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500"
                        value="{{ old('recete_name') }}">
                </div>

                <div class="mb-4">
                    <label for="description" class="block text-gray-600 text-sm font-medium mb-2">Description</label>
                    <textarea name="description" id="description"
                        class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500"
                        rows="4">{{ old('description') }}</textarea>
                </div>

                <div class="mb-4">
                    <label for="image" class="block text-gray-600 text-sm font-medium mb-2">Image</label>
                    <input type="file" name="image" id="image"
                        class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500">
                </div>

                <div class="mb-4">
                    <label for="categories_id" class="block text-gray-600 text-sm font-medium mb-2">Category</label>
                    <select name="categories_id"
                        class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500">
                        <option value="" selected disabled>Select category</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="text-center mt-6">
                    <button type="submit"
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add <i
                            class="fa fa-paper-plane-o ml-2"></i></button>
                </div>
            </form>

        </div>

    </div>
    <!-- Card -->
</div>
@endsection
