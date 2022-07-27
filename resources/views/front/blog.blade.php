@extends('layouts.front')
@section('content')
<div class="container mx-auto">
   <h1 class="text-center text-2xl mt-3 mb-5">All Posts</h1>
   <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 w-2/3 mx-auto mt-5">
        @foreach ($posts as $post)
          <div class="flex flex-col rounded-lg shadow-lg p-3">
              <img src="{{ asset('storage/posts/'.$post->image) }}" alt="" class="rounded-lg">
              <h1 class="mt-2 text-2xl italic">{{ $post->title }}</h1>
              <p class="mt-2">{{ $post->tag->name }}</p>
              <p class="mt-2">{{ $post->created_at }}</p>
              <a href="{{ route('post',$post) }}" class="w-1/3 mt-3 mx-auto text-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150" >view</a>
          </div>

        @endforeach
   </div>

</div>

@endsection
