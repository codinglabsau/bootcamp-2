@extends('layouts.app')

@section('title', 'Movies Labs')

@section('content')


<!-- container for hero -->
<div class="bg-brand-semi-gray ">
  <div class="container mx-auto p-12">
    <!-- Hero -->
    <div class="flex">
      <div class="p-4 w-2/3">
        <h1 class="my-4 text-brand-dark-green text-4xl font-semibold">Welcome</h1>
        <p class="mb-4 pr-12 text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi metus
          dui,
          facilisis in posuere non, sagittis ac purus. Etiam ut rhoncus quam. Vestibulum vulputate eros sed
          dui
          iaculis, et aliquet ex eleifend. Vestibulum vel eros ac eros rhoncus finibus.<p>
      </div>
      <div class="p-4 w-1/3">
        <img class="w-56 h-56" src="{{ asset('/imgs/Icon.png') }}" alt="">
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

    <!-- Movies component -->
    <div class="w-1/4 px-4">
      <img class="mb-4" src="{{ asset('/imgs/John-Wick-3.png') }}" alt="John Wick Movie Poster Image">
      <h3 class="mb-2 text-xl text-brand-dark-green">John Wick 3:
        Parabellum
      </h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sollicitudin viverra est et aliquet.
        Vivamus sollicitudin velit ex,</p>
    </div>

    <!-- Movies component -->
    <div class="w-1/4 px-4">
      <img class="mb-4" src="{{ asset('/imgs/John-Wick-3.png') }}" alt="John Wick Movie Poster Image">
      <h3 class="mb-2 text-xl text-brand-dark-green">John Wick 3:
        Parabellum
      </h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sollicitudin viverra est et aliquet.
        Vivamus sollicitudin velit ex,</p>
    </div>

    <!-- Movies component -->
    <div class="w-1/4 px-4">
      <img class="mb-4" src="{{ asset('/imgs/John-Wick-3.png') }}" alt="John Wick Movie Poster Image">
      <h3 class="mb-2 text-xl text-brand-dark-green">John Wick 3:
        Parabellum
      </h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sollicitudin viverra est et aliquet.
        Vivamus sollicitudin velit ex,</p>
    </div>

    <!-- Movies component -->
    <div class="w-1/4 px-4">
      <img class="mb-4" src="{{ asset('/imgs/John-Wick-3.png') }}" alt="John Wick Movie Poster Image">
      <h3 class="mb-2 text-xl text-brand-dark-green">John Wick 3:
        Parabellum
      </h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sollicitudin viverra est et aliquet.
        Vivamus sollicitudin velit ex,</p>
    </div>

  </div>


  <!-- Actors header-->
  <div class="my-10">
    <h2 class="text-3xl leading-inline text-brand-dark-green w-full text-left border-b-2 border-brand-dark-green ">
      <span class="pr-4 bg-brand-light-gray">Actors</span></h2>
  </div>

  <div class="flex -mx-4">

    <!-- Actor component -->
    <div class="w-1/6 px-4">
      <img class="mb-4" src="{{ asset('/imgs/John-Wick-3.png') }}" alt="John Wick Movie Poster Image">
      <h4 class="mb-2 text-lg text-center text-brand-dark-green">Robert Downey Jr.
      </h4>
    </div>

    <!-- Actor component -->
    <div class="w-1/6 px-4">
      <img class="mb-4" src="{{ asset('/imgs/John-Wick-3.png') }}" alt="John Wick Movie Poster Image">
      <h4 class="mb-2 text-lg text-center text-brand-dark-green">Robert Downey Jr.
      </h4>
    </div>

    <!-- Actor component -->
    <div class="w-1/6 px-4">
      <img class="mb-4" src="{{ asset('/imgs/John-Wick-3.png') }}" alt="John Wick Movie Poster Image">
      <h4 class="mb-2 text-lg text-center text-brand-dark-green">Robert Downey Jr.
      </h4>
    </div>

    <!-- Actor component -->
    <div class="w-1/6 px-4">
      <img class="mb-4" src="{{ asset('/imgs/John-Wick-3.png') }}" alt="John Wick Movie Poster Image">
      <h4 class="mb-2 text-lg text-center text-brand-dark-green">Robert Downey Jr.
      </h4>
    </div>

    <!-- Actor component -->
    <div class="w-1/6 px-4">
      <img class="mb-4" src="{{ asset('/imgs/John-Wick-3.png') }}" alt="John Wick Movie Poster Image">
      <h4 class="mb-2 text-lg text-center text-brand-dark-green">Robert Downey Jr.
      </h4>
    </div>

    <!-- Actor component -->
    <div class="w-1/6 px-4">
      <img class="mb-4" src="{{ asset('/imgs/John-Wick-3.png') }}" alt="John Wick Movie Poster Image">
      <h4 class="mb-2 text-lg text-center text-brand-dark-green">Robert Downey Jr.
      </h4>
    </div>

  </div>

</div>




@endsection