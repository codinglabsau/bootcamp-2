@extends('layouts.app')

@section('title', 'Movies')

@section('content')
<!-- container for content -->
<div class="container mx-auto bg-brand-light-gray p-4">
    <!-- Movie profile -->
    <!-- Movie header -->
    @foreach($movie as $m)
    <div class="my-10">
        <h2 class="text-3xl leading-inline text-brand-dark-green w-full text-left border-b-2 border-brand-dark-green ">
            <span class="pr-4 bg-brand-light-gray">{{$m->title}}</span></h2>
    </div>
    <!-- Movie Content -->
    <div class="flex">
        <div class="mx-16">
            <img src="{{ asset($m->image)}}" alt="">

        </div>
        <div>
            <p><strong>Genre:</strong></p>
            <p><strong>Duration: </strong></p>
            <p><strong>Director </strong></p>
        </div>
    </div>

    <!-- Movie Synopsis -->
    <div class="my-10">
        <h2 class="text-3xl leading-inline text-brand-dark-green w-full text-left border-b-2 border-brand-dark-green ">
            <span class="pr-4 bg-brand-light-gray">Movie Synopsis</span></h2>
    </div>
    <!-- Movie Synopsis Content -->
    <p>{{$m->description}}
    </p>
    @endforeach
    <!-- Quotes -->
    <div class="my-10">
        <h2 class="text-3xl leading-inline text-brand-dark-green w-full text-left border-b-2 border-brand-dark-green ">
            <span class="pr-4 bg-brand-light-gray">Quotes</span></h2>
    </div>
    <!-- Quotes Content -->
    <p>Lorem ipsum dolor sit amet, et probo harum dicit pro. Nec te suas luptatum philosophia. At feugiat delectus vix. Detraxit posidonium nec eu. Expetendis sententiae accommodare at sit, et numquam appetere platonem est.
    </p>

    <!-- Screenshots -->
    <div class="my-10">
        <h2 class="text-3xl leading-inline text-brand-dark-green w-full text-left border-b-2 border-brand-dark-green ">
            <span class="pr-4 bg-brand-light-gray">Screenshots</span></h2>
    </div>

    <!-- Cast -->
    <div class="my-10">
        <h2 class="text-3xl leading-inline text-brand-dark-green w-full text-left border-b-2 border-brand-dark-green ">
            <span class="pr-4 bg-brand-light-gray">Cast</span></h2>
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

</div>
@endsection
