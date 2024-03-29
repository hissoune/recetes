@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="bg-white p-8 mx-auto rounded-lg shadow-md w-50">
            <form action="{{ route('categories.update',$category)}}" method="post">
                @csrf
                @method('put')
                <p class="text-2xl font-semibold text-center text-black mb-4">update Category</p>
                <div>
                <label for="categoryName" class="text-black" >category name</label>
                <input id="categoryName" class="block text-gray-600 font-light" type="text" name="catname" value="{{ $category->name }}" >
            </div>
    
               
                <div class="text-center mt-4">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white px-4 py-2 rounded-md">
                        update <i class="fa fa-paper-plane-o ml-2"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
