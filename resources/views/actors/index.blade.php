@extends('layouts.app')

@section('title', 'Movies')

@section('content')
    <!-- container for content -->

<div class="container mx-auto bg-brand-light-gray p-4">
    <!-- Actors header-->
    <div class="my-10">
        <h2 class="text-3xl leading-inline text-brand-dark-green w-full text-left border-b-2 border-brand-dark-green ">
            <span class="pr-4 bg-brand-light-gray">Actors</span></h2>
    </div>

    <div class="flex -mx-4">
    @foreach($actors as $actor)
        <!-- Actor component -->
            <div class="w-1/6 px-4">
                <img class="mb-4" src="{{$actor->image}}" alt="John Wick Movie Poster Image">
                <h4 class="mb-2 text-lg text-center text-brand-dark-green"><a href="actors/{{ $actor->id }}">{{$actor->f_name}} {{$actor->l_name}}</a>

                </h4>
            </div>
        @endforeach

    </div>

</div>
@endsection
