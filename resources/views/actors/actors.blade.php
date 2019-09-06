@extends('layouts.app')

@section('title', 'Actors')

@section('content')
<!-- container for content -->
<div class="container mx-auto bg-brand-light-gray p-4">
    <!-- Actor profile -->
    <!-- Actor header -->
    <div class="my-10">
        <h2 class="text-3xl leading-inline text-brand-dark-green w-full text-left border-b-2 border-brand-dark-green ">
            <span class="pr-4 bg-brand-light-gray">Robert Downey Jr.</span></h2>
    </div>
    <!-- Actor Content -->
    <div class="flex">
        <div class="mx-16">
            <img src="" alt="">
            insert image here
        </div>
        <div>
            <p><strong>Birth Name: </strong>Robert John Downey Jr</p>
            <p><strong>Age: </strong>54</p>
            <p><strong>DOB: </strong>4 April</p>
            <p><strong>Height: </strong>5'8'' (1.74 m)</p>
        </div>
    </div>

    <!-- Bio -->
    <div class="my-10">
        <h2 class="text-3xl leading-inline text-brand-dark-green w-full text-left border-b-2 border-brand-dark-green ">
            <span class="pr-4 bg-brand-light-gray">Bio</span></h2>
    </div>
    <!-- Bio Content -->
    <p>Lorem ipsum dolor sit amet, et probo harum dicit pro. Nec te suas luptatum philosophia. At feugiat delectus vix. Detraxit posidonium nec eu. Expetendis sententiae accommodare at sit, et numquam appetere platonem est.
    </p>
    <!-- Recent Roles -->
    <div class="my-10">
        <h2 class="text-3xl leading-inline text-brand-dark-green w-full text-left border-b-2 border-brand-dark-green ">
            <span class="pr-4 bg-brand-light-gray">Recent Roles</span></h2>
    </div>

    <div class="flex -mx-4">

        <!-- Recent Roles component -->
        <div class="w-1/6 px-4">
            <img class="mb-4" src="{{ asset('/imgs/John-Wick-3.png') }}" alt="John Wick Movie Poster Image">
            <h4 class="mb-2 text-lg text-center text-brand-dark-green">Ironman
            </h4>
            <p class="text-xs text-gray-500">Tony Stark</p>
            <p class="text-xs text-gray-500">Ironman</p>
        </div>

        <!-- Recent Roles component -->
        <div class="w-1/6 px-4">
            <img class="mb-4" src="{{ asset('/imgs/John-Wick-3.png') }}" alt="John Wick Movie Poster Image">
            <h4 class="mb-2 text-lg text-center text-brand-dark-green">Ironman
            </h4>
            <p class="text-xs text-gray-500">Tony Stark</p>
            <p class="text-xs text-gray-500">Ironman</p>
        </div>


        <!-- Recent Roles component -->
        <div class="w-1/6 px-4">
            <img class="mb-4" src="{{ asset('/imgs/John-Wick-3.png') }}" alt="John Wick Movie Poster Image">
            <h4 class="mb-2 text-lg text-center text-brand-dark-green">Ironman
            </h4>
            <p class="text-xs text-gray-500">Tony Stark</p>
            <p class="text-xs text-gray-500">Ironman</p>
        </div>


        <!-- Recent Roles component -->
        <div class="w-1/6 px-4">
            <img class="mb-4" src="{{ asset('/imgs/John-Wick-3.png') }}" alt="John Wick Movie Poster Image">
            <h4 class="mb-2 text-lg text-center text-brand-dark-green">Ironman
            </h4>
            <p class="text-xs text-gray-500">Tony Stark</p>
            <p class="text-xs text-gray-500">Ironman</p>
        </div>


        <!-- Recent Roles component -->
        <div class="w-1/6 px-4">
            <img class="mb-4" src="{{ asset('/imgs/John-Wick-3.png') }}" alt="John Wick Movie Poster Image">
            <h4 class="mb-2 text-lg text-center text-brand-dark-green">Ironman
            </h4>
            <p class="text-xs text-gray-500">Tony Stark</p>
            <p class="text-xs text-gray-500">Ironman</p>
        </div>

        <!-- Recent Roles component -->
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