@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="bg-white p-8 mx-auto rounded-lg shadow-md w-50">
            <form action="{{ route('categories.store')}}" method="post">
                @csrf
                <p class="text-2xl font-semibold text-center text-black mb-4">Add Category</p>
                <div>
                <label for="categoryName" class="text-black" >category name</label>
                <x-text-input id="categoryName" class="block text-gray-600 font-light" type="text" name="catname" :value="old('catname')" />
            </div>
    
               
                <div class="text-center mt-4">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white px-4 py-2 rounded-md">
                        Add <i class="fa fa-paper-plane-o ml-2"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
