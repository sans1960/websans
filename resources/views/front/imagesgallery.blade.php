@extends('layouts.front')
@section('css')
<link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">

@endsection
@section('content')
<div class="container mx-auto">
   <h1 class="text-center text-2xl mt-3 mb-5">{{ $gallery->name }}</h1>
   <div class="flex justify-center w-2/3 mx-auto">
    <div class="owl-carousel owl-theme">
    @foreach ($images as $image)
    <div class="item flex flex-col justify-center">
        <h1 class="text-2xl text-center mb-4">{{ $image->title }}</h1>
        <figure>
            <img src="{{ asset('storage/images/'.$image->image) }}" alt="" class="h-80">
            <figcaption>{{ $image->caption }}</figcaption>
          </figure>

    </div>

    @endforeach
    </div>
   </div>

</div>

@endsection
@section('scripts')
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script>
       $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:true
        },

    }
})
    </script>
@endsection
