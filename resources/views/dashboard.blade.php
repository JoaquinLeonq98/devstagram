@extends('layouts.app')

@section('title')
    {{$user->username}}
@endsection    

@section('content')

    <div class="flex justify-center">
        <div class="w-full md:w-8/12 lg:w-6/12 flex flex-col items-center md:flex-row">
            <div class="w-8/12 lg:w-6/12 px-5">
                <img src="{{asset('src/img/usuario.svg')}}" alt="user image">
            </div>
            <div class=" md:w-8/12 lg:w-6/12 px-5 flex flex-col items-center md:justify-center md:items-start py-10 md:py-10">
                <p class=" text-text dark:text-text text-sm mb-3 font-bold mt-6">
                    0
                    <span class="text-subtext1 dark:text-subtext1 font-normal">
                        Followers
                    </span>
                </p>
                <p class=" text-text dark:text-text text-sm mb-3 font-bold">
                    0
                    <span class="text-subtext1 dark:text-subtext1 font-normal">
                        Following
                    </span>
                </p>
                <p class=" text-text dark:text-text text-sm mb-3 font-bold">
                    0
                    <span class="text-subtext1 dark:text-subtext1 font-normal">
                        Posts
                    </span>
                </p>
            </div>
        </div>
    </div>
@endsection    