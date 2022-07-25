 @extends('layouts.front')
 @section('content')
 <div class="container mx-auto">
    <h1 class="text-center text-2xl mt-3 mb-5">Portfolio</h1>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 w-2/3 mx-auto mt-5">
           @foreach ($portfolios as $portfolio)
           <div class="flex flex-col p-3 rounded-lg shadow-lg">
            <h1 class="text-2xl text-blue-700 italic mb-3">{{ $portfolio->title }}</h1>
            <p class="mb-3">{{ $portfolio->description }}</p>
            <p class="mb-3 italic font-bold">{{ $portfolio->type }}</p>
            <a href="{{ $portfolio->url }}" target="_blank" class="w-1/3 mx-auto text-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150" >view</a>

           </div>

           @endforeach
    </div>

 </div>

 @endsection
