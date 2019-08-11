@extends('layouts.app')

@section('title', 'Movies Labs')

@section('content')
<!-- Hero -->
<div class="p-4 flex">
  <div class="w-2/3">
    <h1 class="my-4 text-brand-dark-green text-4xl font-semibold">Welcome</h1>
    <p class="mb-4 pr-12 text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi metus dui,
      facilisis in posuere non, sagittis ac purus. Etiam ut rhoncus quam. Vestibulum vulputate eros sed dui
      iaculis, et aliquet ex eleifend. Vestibulum vel eros ac eros rhoncus finibus.<p>
  </div>
  <div class="w-1/3">Icon</div>
</div>
<!-- Movies header -->
<div class="my-10">
  <h2 class="text-2xl leading-inline text-brand-dark-green w-full text-left border-b-2 border-brand-dark-green "><span class="pr-4 bg-brand-light-gray">Movies</span></h2>
</div>

<!-- Movies component -->
<div class="w-1/3 ">
  <img src="public/imgs/John-Wick-3.png" alt="">
  <h3 class="text-xl text-brand-dark-green">John Wick 3:
    Parabellum
  </h3>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sollicitudin viverra est et aliquet. Vivamus sollicitudin velit ex,</p>
</div>

<!-- Actors header-->
<div class="my-10">
  <h2 class="text-2xl leading-inline text-brand-dark-green w-full text-left border-b-2 border-brand-dark-green "><span class="pr-4 bg-brand-light-gray">Actors</span></h2>
</div>





@endsection