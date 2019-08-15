@extends('layouts.app')

@section('title', 'Movies')

@section('content')
<!-- container for content -->
<div class="container mx-auto bg-brand-light-gray p-4">
    <!-- Search results page  -->
    <!-- Search results header -->
    <div class="my-10">
        <h2 class="text-3xl leading-inline text-brand-dark-green w-full text-left">
            <span class="pr-4 bg-brand-light-gray">Search Results for "Robert"</span></h2>
    </div>

    <!-- Movies Results -->
    <div class="my-10">
        <h2 class="text-3xl leading-inline text-brand-dark-green w-full text-left border-b-2 border-brand-dark-green ">
            <span class="pr-4 bg-brand-light-gray">Movies</span></h2>
    </div>

    <div class="flex -mx-4">

        <!-- Cast component -->
        <div class="w-1/6 px-4">
            <img class="mb-4" src="{{ asset('/imgs/John-Wick-3.png') }}" alt="John Wick Movie Poster Image">
            <h4 class="mb-2 text-lg text-center text-brand-dark-green">Ironman
            </h4>
            <p class="text-xs text-gray-500">Tony Stark</p>
            <p class="text-xs text-gray-500">Ironman</p>
        </div>

        <!-- Cast component -->
        <div class="w-1/6 px-4">
            <img class="mb-4" src="{{ asset('/imgs/John-Wick-3.png') }}" alt="John Wick Movie Poster Image">
            <h4 class="mb-2 text-lg text-center text-brand-dark-green">Ironman
            </h4>
            <p class="text-xs text-gray-500">Tony Stark</p>
            <p class="text-xs text-gray-500">Ironman</p>
        </div>

        

    </div>

    <!-- Actors Results -->
    <div class="my-10">
        <h2 class="text-3xl leading-inline text-brand-dark-green w-full text-left border-b-2 border-brand-dark-green ">
            <span class="pr-4 bg-brand-light-gray">Actors</span></h2>
    </div>

    <div class="flex -mx-4">

        <!-- Cast component -->
        <div class="w-1/6 px-4">
            <img class="mb-4" src="{{ asset('/imgs/John-Wick-3.png') }}" alt="John Wick Movie Poster Image">
            <h4 class="mb-2 text-lg text-center text-brand-dark-green">Ironman
            </h4>
            <p class="text-xs text-gray-500">Tony Stark</p>
            <p class="text-xs text-gray-500">Ironman</p>
        </div>

    </div>

</div>
@endsection