@extends('layouts.app')

@section('title', 'Movies')

@section('content')
    <!-- container for content -->
    <div class="container mx-auto bg-brand-light-gray p-4 ">
        <!-- Movie profile -->
        <!-- Movie header -->
        @foreach($movies as $movie)
        <div class="my-10">
            <h2 class="text-3xl leading-inline text-brand-dark-green w-full text-left border-b-2 border-brand-dark-green ">
                <span class="pr-4 bg-brand-light-gray">{{$movie->title}}</span>
            </h2>
        </div>
        <!-- Movie Content -->
            <div class="flex">
                <div class="mx-16">
                    <img src="{{ asset($movie->image)}}" alt="">
                </div>
                <div>
                    <p><strong>Genre:</strong> {{$movie->genre}}</p>
                    <p><strong>Duration:</strong> {{$movie->duration}}</p>
                    <p><strong>Director:</strong> {{$movie->director}}</p>
                </div>
            </div>

            <!-- Movie Synopsis -->
            <div class="my-10">
                <h2 class="text-3xl leading-inline text-brand-dark-green w-full text-left border-b-2 border-brand-dark-green ">
                    <span class="pr-4 bg-brand-light-gray">Movie Synopsis</span></h2>
            </div>
            <!-- Movie Synopsis Content -->
            <p>{{$movie->description}}
            </p>
        @endforeach
    <!-- Quotes -->
        <div class="my-10">
            <h2 class="text-3xl leading-inline text-brand-dark-green w-full text-left border-b-2 border-brand-dark-green ">
                <span class="pr-4 bg-brand-light-gray">Quotes</span></h2>
        </div>
        <!-- Quotes Content -->
        @foreach($quotes as $quote)
            <p>
                {{$quote->quote}}
            </p>
        @endforeach
        <!-- Cast -->
        <div class="my-10">
            <h2 class="text-3xl leading-inline text-brand-dark-green w-full text-left border-b-2 border-brand-dark-green ">
                <span class="pr-4 bg-brand-light-gray">Cast</span></h2>
        </div>

        <div class="flex -mx-4 flex-wrap md: justify-center">
            @foreach($cast as $c)
            <!-- Cast component -->
            <div class="flex w-56 px-4 justify-center">
                <a href="\actors/{{$c->id}}">
                    <img class="mb-4 w- h-64" src="{{ asset($c->image) }}" alt="{{$c->f_name}} {{$c->l_name}}">
                    <h4 class="mb-2 text-lg text-center text-brand-dark-green">
                        {{$c->f_name}} {{$c->l_name}}
                    </h4>
                    <p class="text-xs text-gray-500 text-center">{{$c->pivot->character}}</p>
                </a>
            </div>
            @endforeach
        </div>

    </div>
@endsection
