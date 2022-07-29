@extends('layouts.front')
@section('content')
<div class="container mx-auto">
   <h1 class="text-center text-2xl mt-3 mb-5">Popular Movies</h1>
   <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 w-2/3 mx-auto mt-5">
        @foreach ($popularMovies as $movie)
          <div class="flex flex-col rounded-lg shadow-lg p-3">
            <img src="{{ 'https://image.tmdb.org/t/p/w500/'.$movie['poster_path'] }}" alt="poster" class="hover:opacity-75 transition ease-in-out duration-150">
        <a href="">{{ $movie['title'] }}</a>
        <div class="flex items-center text-gray-400 text-sm mt-1">
            <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24"><g data-name="Layer 2"><path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star"/></g></svg>
            <span class="ml-1">{{ $movie['vote_average'] }}</span>
            <span class="mx-2">|</span>
            <span>{{ $movie['release_date'] }}</span>
        </div>

          </div>

        @endforeach
   </div>

</div>

@endsection
