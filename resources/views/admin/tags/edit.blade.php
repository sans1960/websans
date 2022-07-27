<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Tag') }}
        </h2>
    </x-slot>

    <div class="container max-w-6xl mx-auto mt-20">
        <form method="POST" action="{{ route('admin.tags.update',$tag) }}">
            @csrf
            @method('put')

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="title" class="block mt-1 w-full" type="text" name="name" :value="old('name',$tag->name)" required autofocus />
                @error('name')
                <span class="text-red-600 text-sm">
                    {{ $message }}
                </span>
                @enderror
            </div>


            <div class="flex items-center justify-center mt-4">


                <x-button class="ml-4">
                    {{ __('update') }}
                </x-button>
            </div>
        </form>
    </div>
</x-app-layout>
