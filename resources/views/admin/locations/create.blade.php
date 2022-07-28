<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Location') }}
        </h2>
    </x-slot>

    <div class="container max-w-6xl mx-auto mt-20">
        <form method="POST" action="{{ route('admin.locations.store') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                @error('name')
                <span class="text-red-600 text-sm">
                    {{ $message }}
                </span>
                @enderror
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="comments" :value="__('Comments')" />

                <x-input id="comments" class="block mt-1 w-full" type="text" name="comments" :value="old('comments')" required />
                @error('comments')
                <span class="text-red-600 text-sm">
                    {{ $message }}
                </span>
                @enderror
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="latitud" :value="__('Latitud')" />

                <x-input id="latitud" class="block mt-1 w-full"
                                type="text"
                                name="latitud"
                                :value="old('latitud')"
                                required />
                @error('latitud')
                                <span class="text-red-600 text-sm">
                                    {{ $message }}
                                </span>
              @enderror
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="longitud" :value="__('Longitud')" />

                <x-input id="longitud" class="block mt-1 w-full"
                                type="text"
                                :value="old('longitud')"
                                name="longitud" required />


                                @error('longitud')
                                <span class="text-red-600 text-sm">
                                    {{ $message }}
                                </span>
                                @enderror
            </div>

            <div class="flex items-center justify-center mt-4">


                <x-button class="ml-4">
                    {{ __('create') }}
                </x-button>
            </div>
        </form>
    </div>
</x-app-layout>
