<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Portfolio') }}
        </h2>
    </x-slot>

    <div class="container max-w-6xl mx-auto mt-20">
        <form method="POST" action="{{ route('admin.portfolio.update',$portfolio) }}">
            @csrf
            @method('put')

            <!-- Name -->
            <div>
                <x-label for="title" :value="__('Title')" />

                <x-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title',$portfolio->title)" required autofocus />
                @error('title')
                <span class="text-red-600 text-sm">
                    {{ $message }}
                </span>
                @enderror
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="type" :value="__('Type')" />

                <x-input id="type" class="block mt-1 w-full" type="text" name="type" :value="old('type',$portfolio->type)" required />
                @error('type')
                <span class="text-red-600 text-sm">
                    {{ $message }}
                </span>
                @enderror
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="description" :value="__('Description')" />

                <x-input id="description" class="block mt-1 w-full"
                                type="text"
                                name="description"
                                :value="old('description',$portfolio->description)"
                                required />
                @error('description')
                                <span class="text-red-600 text-sm">
                                    {{ $message }}
                                </span>
              @enderror
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="url" :value="__('Url')" />

                <x-input id="url" class="block mt-1 w-full"
                                type="text"
                                :value="old('url',$portfolio->url)"
                                name="url" required />


                                @error('url')
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
