@extends('layouts.app')

@section('title', 'Movies')

@section('content')
    <!-- container for content -->
    <div class="container mx-auto bg-brand-light-gray p-4">
        <!-- Movie profile -->
        <!-- Movie header -->
        @foreach($movies as $m)
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

        <div class="flex -mx-4 flex-wrap">
            @foreach($cast as $c)
            <!-- Cast component -->
            <div class="flex w-1/6 px-4 flex-wrap justify-center">
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
