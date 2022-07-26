@extends('layouts.front')
@section('content')
<div class="container mx-auto">
   <h1 class="text-center text-2xl mt-3 mb-5">Galerias</h1>
   <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 w-2/3 mx-auto mt-5">
          @foreach ($galeries as $gallery)
          <div class="flex flex-col p-3 rounded-lg shadow-lg items-center">
           <a href="{{ route('imagesgallery',$gallery) }}" class="text-2xl text-blue-700 italic mb-3">{{ $gallery->name }}</a>



          </div>

          @endforeach
   </div>

</div>

@endsection
