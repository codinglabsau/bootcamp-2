@extends('layouts.app')

@section('title', 'Movies Labs')

@section('content')


<!-- container for hero -->
<div class="bg-brand-semi-gray ">
  <div class="container mx-auto pr-12">
    <!-- Hero -->
    <div class="flex p-4">
      <div class="w-1/2 px-12 ">
        <h1 class="my-4 text-brand-dark-green text-4xl font-semibold">Film Reviews</h1>
        <p class="mb-4 text-white">Looking for a movie to see this week. Check out the latest releases in Australian cinemas, all reviewed by Movie Labs Critics.<p>
      </div>
      <div class="w-1/2 ml-12">
        <img class="" src="{{ asset('/imgs/hero-image.png') }}" alt="">
      </div>
    </div>
  </div>
</div>

<!-- container for content -->

<div class="container mx-auto bg-brand-light-gray p-4">

  <!-- Movies header -->
  <div class="my-10">
    <h2 class="text-3xl leading-inline text-brand-dark-green w-full text-left border-b-2 border-brand-dark-green ">
      <span class="pr-4 bg-brand-light-gray">Movies</span></h2>
  </div>

  <div class="flex -mx-4">
    @foreach($movies as $movie)
      <!-- Movies component -->
      <div class="w-1/4 px-4">
        <img class="mb-4" src="{{$movie->image}}" alt="John Wick Movie Poster Image">
        <h3 class="mb-2 text-xl text-brand-dark-green">
            <a href="movies/{{$movie->id}}">{{$movie->title}}</a>
        </h3>
        <p>{{$movie->description}}</p>
      </div>
    @endforeach
  </div>


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
      <h4 class="mb-2 text-lg text-center text-brand-dark-green">{{$actor->f_name}} {{$actor->l_name}}
      </h4>
    </div>
    @endforeach

  </div>

</div>




@endsection
