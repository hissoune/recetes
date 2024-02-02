<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'recets') }}</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans text-gray-900 antialiased">
    <style>
        @media (min-width: 768px){
        .div{
            display:flex ;
        }
        .sticky-navigation {
                position: fixed;
                top: 0;
                z-index: 0;
                height: 200vh; /* Set the height to fill the viewport */
                overflow-y: auto; /* Enable vertical scrolling within the navigation */
            }
        }
        </style>
       
    <div class="div min-h-screen bg-gray-100">
        <!-- Sidebar -->
      <div class="relative h-screen ">
    <div class="sticky-navigation bg-blue-500">
        @include('layouts.navigation')
    </div>
</div>
          
       

        <!-- Main Content -->
        <div class="flex-1 flex flex-col items-center bg-gray-300 overflow-hidden">
            <!-- Page Heading -->
            <div class="   w-full text-center p-6 bg-black dark:bg-gray-800 text-white">
                <h1 class="text-3xl font-bold text-gray-900 py-3 text-white">@yield('title')</h1>
                        @yield('welcom')
            </div>
            
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            @if ($errors->any())
                <div class="bg-red-500 text-white p-4 mb-4 rounded-md">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- Page Content -->
            <div class="flex-1  my-8"> @yield('content')</div>
        </div>
    </div>
</body>
</html>
