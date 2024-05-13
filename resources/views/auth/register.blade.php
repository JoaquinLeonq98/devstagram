@extends('layouts.app')

@section('title')
    Register on Devstagram
@endsection

@section('content')
    <div class="md:flex md:justify-evenly md:gap-10 md:items-center">
        <div class="md:w-5/12 p-5">
            <img src="{{ asset('src/img/cat.png') }}" alt=" Imagen de Registro de usaurios">
        </div>
        <div class="md:w-4/12 bg-base dark:bg-base p-6 rounded-lg shadow-overlay0 shadow-md">
            <form action="{{ route('register') }}" method="POST" novalidate>
                @csrf
                <div class="mb-5">
                    <label for="name" class="mb-2 block uppercase text-subtext1 dark:text-subtext0">Name</label>
                    <input type="text" 
                            id="name" 
                            name="name" 
                            placeholder="Your name"
                            class="border p-3 w-full rounded-lg bg-base text-text dark:bg-base dark:text-text @error('name') border-red @enderror"
                            value="{{ old('name') }}"
                            >
                    @error('name')
                        <div class="bg-red-100 border-l-4 border-red text-red-600 p-2 my-2 text-sm" role="alert">
                            <p>{{ $message }}</p>
                        </div>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="username" class="mb-2 block uppercase text-subtext1 dark:text-subtext0">UserName</label>
                    <input type="text" 
                           id="username" 
                           name="username" 
                           placeholder="Your username"
                           class="border p-3 w-full rounded-lg bg-base text-text dark:bg-base dark:text-text @error('name') border-red @enderror"
                           >
                    @error('username')
                        <div class="bg-red-100 border-l-4 border-red text-red-600 p-2 my-2 text-sm role="alert">
                            <p>{{ $message }}</p>
                        </div>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="email" class="mb-2 block uppercase text-subtext1 dark:text-subtext0">Email</label>
                    <input type="email" 
                            id="email" 
                            name="email" 
                            placeholder="Your registration email"
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
                            placeholder="Your registration password"
                            class="border p-3 w-full rounded-lg bg-base text-text dark:bg-base dark:text-text @error('name') border-red @enderror"
                            >
                    @error('password')
                        <div class="bg-red-100 border-l-4 border-red text-red-600 p-2 my-2 text-sm" role="alert">
                            <p>{{ $message }}</p>
                        </div>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="password_confirmation" class="mb-2 block uppercase text-subtext1 dark:text-subtext0">Repeat
                        Password</label>
                    <input type="password" id="password_confirmation" name="password_confirmation"
                        placeholder="Repeat your registration password"
                        class="border p-3 w-full rounded-lg bg-base text-text dark:bg-base dark:text-text @error('name') border-red @enderror">
                </div>

                <input type="submit" value="create account"
                    class="mt-5 bg-blue hover:bg-sky hover:dark:bg-sapphire dark:bg-blue transition-colors cursor-pointer uppercase text-surface0 font-bold w-full p-3 rounded-lg">
            </form>
        </div>
    </div>
@endsection
