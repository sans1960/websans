@extends('layouts.front')
@section('content')
<div class="my-10  container mx-auto flex flex-col md:flex-row shadow-sm overflow-hidden" x-data="{ testimonialActive: 2 }" x-cloak>
    <div class="relative w-full py-2 md:py-24 bg-yellow-500 md:w-1/2 flex flex-col item-center justify-center">

      <div class="absolute top-0 left-0 z-10 grid-indigo w-16 h-16 md:w-40 md:h-40 md:ml-20 md:mt-24"></div>

      <div class="relative text-2xl md:text-5xl py-2 px-6 md:py-6 md:px-1 md:w-64 md:mx-auto text-indigo-100 font-semibold leading-tight tracking-tight mb-0 z-20">
        <span class="md:block">What Our</span>
        <span class="md-block">Make</span>
        <span class="block">For you</span>
      </div>

      <div class="absolute right-0 bottom-0 mr-4 mb-4 hidden md:block">
        <button class="rounded-l-full border-r bg-gray-100 text-gray-500 focus:outline-none hover:text-indigo-500 font-bold w-12 h-10" x-on:click="testimonialActive = testimonialActive === 1 ? 3 : testimonialActive - 1">
          &#8592;
        </button><button class="rounded-r-full bg-gray-100 text-gray-500 focus:outline-none hover:text-indigo-500 font-bold w-12 h-10" x-on:click="testimonialActive = testimonialActive >= 2 ? 1 : testimonialActive + 1">
          &#8594;
        </button>
      </div>
    </div>

    <div class="bg-gray-100 md:w-1/2">
      <div class="flex flex-col h-full relative">



        <div class="h-full relative z-10">
          <div x-show.immediate="testimonialActive === 1">
            <div class="text-gray-600 serif font-normal italic text-center px-6 py-6 md:px-16 md:py-10 text-xl md:text-2xl" x-show.transition="testimonialActive == 1">
                <p> Frontend</p>
                <p> Creativity and functionality</p>



            </div>
          </div>

          <div x-show.immediate="testimonialActive === 2">
            <div class="text-gray-600 serif font-normal text-center italic px-6 py-6 md:px-16 md:py-10 text-xl md:text-2xl" x-show.transition="testimonialActive == 2">
                <p> Backend : </p>
                <p> The web kitchen</p>
            </div>
          </div>

          <div x-show.immediate="testimonialActive === 3">
            <div class="text-gray-600 serif font-normal italic px-6 py-6 md:px-16 md:py-10 text-xl md:text-2xl" x-show.transition="testimonialActive == 3">

            </div>
          </div>
        </div>

        <div class="flex my-4 justify-center items-center">
          <button @click.prevent="testimonialActive = 1" class="text-center font-bold shadow-xs focus:outline-none focus:shadow-outline inline-block rounded-full mx-2" :class="{'h-12 w-12 opacity-25 bg-indigo-300 text-gray-600': testimonialActive != 1, 'h-16 w-16 opacity-100 bg-yellow-600 text-white text-xl': testimonialActive == 1 }">F</button>
          <button @click.prevent="testimonialActive = 2" class="text-center font-bold shadow-xs focus:outline-none focus:shadow-outline h-16 w-16 inline-block bg-yellow-600 rounded-full mx-2" :class="{'h-12 w-12 opacity-25 bg-indigo-300 text-gray-600': testimonialActive != 2, 'h-16 w-16 opacity-100 bg-yellow-600 text-white text-xl': testimonialActive == 2 }">B</button>

        </div>

        <div class="flex justify-center px-6 pt-2 pb-6 md:py-6">
          <div class="text-center" x-show="testimonialActive == 1">
            <a href="" class="text-sm md:text-base font-bold text-white bg-yellow-600 rounded-lg px-4 py-2 leading-tight">Frontend</a>

          </div>

          <div class="text-center" x-show="testimonialActive == 2">
            <h2 class="text-sm md:text-base font-bold text-gray-700 leading-tight">Backend</h2>

          </div>


        </div>
      </div>
    </div>
  </div>
@endsection
