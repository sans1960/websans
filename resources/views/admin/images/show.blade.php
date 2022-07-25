<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Imagen') }}
        </h2>
    </x-slot>

    <div class="container max-w-6xl mx-auto mt-20">

        <div class="flex flex-col">
            <div class="overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                <div
                    class="inline-block min-w-full overflow-hidden align-middle border-b border-gray-200 shadow sm:rounded-lg">
                      <h1 class="text-center  text-4xl">{{ $image->title }}</h1>
                      <h3 class="text-center text-2xl">{{ $image->gallery->name }}</h3>
                      <figure class="mt-5 mb-5">
                        <img src="{{ asset('storage/images/'.$image->image) }}" alt="{{ $image->title }}" class="w-1/2 mx-auto">
                        <figcaption class="mt-3 text-center">{{ $image->caption }}</figcaption>
                      </figure>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
