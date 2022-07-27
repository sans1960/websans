@extends('layouts.front')
@section('content')
<div class="container mx-auto">
   <h1 class="text-center text-2xl mt-3 mb-5">{{ $post->title }}</h1>
   <div class=" w-2/3 mx-auto mt-5 flex flex-col">
    <img src="{{ asset('storage/posts/'.$post->image) }}" alt=""class="mx-auto">
    <div class="flex justify-between">
        <p>{{ $post->tag->name }}</p>
        <p>{{ $post->created_at }}</p>
    </div>
      <div>
        {!! $post->body !!}
      </div>
      <a href="{{ $post->link }}" target="_blank" class="w-1/3 mt-3 mx-auto text-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150" >view</a>
   </div>

</div>

@endsection
