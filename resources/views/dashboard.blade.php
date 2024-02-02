@extends('layouts.app')
@section('title','dashboard')
  @section('welcom')
      <h4>welcome back mister <strong class="text-yellow-300">{{ Auth::user()->name }}</strong></h4>
  @endsection  

@section('content')
    
<div class="flex">
    <div class="py-12 px-3 ">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 border shadow rounded bg-white p-4">
            <h4>number of categories</h4>

            <div class="bg-blue-500 overflow-hidden shadow-sm sm:rounded-lg">
                <div class=" text-gray-900 text-center font-bold text-5xl text-white">
                    {{ $cat }}
                </div>
            </div>
        </div>
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 border rounded bg-white shadow p-4">
            <h4>number of recetes</h4>
            <div class="bg-blue-500 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="text-gray-900 text-center font-bold text-5xl text-white">
                    {{ $recet }}
                </div>
            </div>
        </div>
    </div>
</div>

    @endsection