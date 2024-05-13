@extends('layouts.app')

@section('title')
    Login on Devstagram
@endsection

@section('content')
    <div class="md:flex md:justify-evenly md:gap-10 md:items-center">
        <div class="md:w-5/12 p-5">
            <img src="{{ asset('src/img/latte_circle.png') }}" alt=" image login for users">
        </div>

        <div class="md:w-4/12 bg-base dark:bg-base p-6 rounded-lg shadow-overlay0 shadow-md">
            <form action="{{route( 'login' )}}" method="POST" novalidate>
                @csrf

                @if (session('message'))
                    <div class="bg-red-100 border-l-4 border-red text-red-600 p-2 my-2 text-sm" role="alert">
                        <p>{{ session('message') }}</p>
                    </div> 
                @endif
                <div class="mb-5">
                    <label for="email" class="mb-2 block uppercase text-subtext1 dark:text-subtext0">Email</label>
                    <input type="email" 
                            id="email" 
                            name="email" 
                            placeholder="Your email"
                            class="border p-3 w-full rounded-lg bg-base text-text dark:bg-base dark:text-text @error('name') border-red @enderror"
                            >
                    @error('email')
                        <div class="bg-red-100 border-l-4 border-red text-red-600 p-2 my-2 text-sm" role="alert">
                            <p>{{ $message }}</p>
                        </div>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="password" class="mb-2 block uppercase text-subtext1 dark:text-subtext0">Password</label>
                    <input type="password" 
                            id="password" 
                            name="password" 
                            placeholder="Your password"
                            class="border p-3 w-full rounded-lg bg-base text-text dark:bg-base dark:text-text @error('name') border-red @enderror"
                            >
                    @error('password')
                        <div class="bg-red-100 border-l-4 border-red text-red-600 p-2 my-2 text-sm" role="alert">
                            <p>{{ $message }}</p>
                        </div>
                    @enderror
                </div>
                <div class="mb-5">
                    <input 
                            type="checkbox" 
                            id="remember"
                            value="remember" 
                            name="remember" 
                            class="w-3 h-3 dark:text-maroon bg-base  rounded focus:ring-pink dark:focus:ring-pink dark:ring-offset-base focus:ring-2 dark:bg-subtext1 dark:border-subtext0"
                            >
                    <label class="text-subtext0 text-sm" for="remember"> Rembeber me</label>        
                <input type="submit" value="Login"
                    class="mt-5 bg-blue hover:bg-sky hover:dark:bg-sapphire dark:bg-blue transition-colors cursor-pointer uppercase text-surface0 font-bold w-full p-3 rounded-lg">
            </form>
        </div>
    </div>
@endsection
