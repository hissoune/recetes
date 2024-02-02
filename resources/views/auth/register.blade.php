@extends('layouts.guest')

@section('content')
    <div class="">
        <h1 class="text-center mt-4 text-white my-6"><strong>Register</strong></h1>

        <form method="POST" action="{{ route('register') }}" class="flex flex-lg-row justify-center flex-sm-column">
            @csrf

            <!-- Left Section -->
            <div class="bg-blue-500 flex flex-col justify-center w-80">
                <h3 class="text-white font-bold text-center  text-3xl">Welcome User</h3>
                <p class="text-center my-6">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt ipsum ea ut deleniti explicabo inventore temporibus eum, sunt pariatur distinctio. Molestiae magnam exercitationem id ex non, quia sequi tempora soluta.</p>
            </div>

            <!-- Right Section -->
            <div class="border p-10 rounded shadow bg-gray-500 w-80">
                <!-- Name -->
                <div>
                    <x-input-label for="name" :value="__('Name')" />
                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <!-- Email Address -->
                <div class="mt-4">
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-input-label for="password" :value="__('Password')" />
                    <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Confirm Password -->
                <div class="mt-4">
                    <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                    <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>

                <!-- Register Button -->
                <div class="mt-4">
                    <a href="{{ route('login') }}" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        {{ __('Already registered?') }}
                    </a>

                    <x-primary-button class="ms-4">
                        {{ __('Register') }}
                    </x-primary-button>
                </div>
            </div>
        </form>
    </div>
@endsection
