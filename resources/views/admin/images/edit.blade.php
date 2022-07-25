<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Image') }}
        </h2>
    </x-slot>

    <div class="container max-w-6xl mx-auto mt-20">
        <form method="POST" action="{{ route('admin.images.update',$image) }}" enctype="multipart/form-data">
            @csrf
            @method('put')
            <input id="" type="text" class="w-full p-2 mt-5 border-2 border-blue-500 rounded-lg " name="title" value="{{ $image->title }}" placeholder="Title" required  autofocus>
            <input id="" type="text" class="w-full p-2 mt-5 border-2 border-blue-500 rounded-lg " name="caption" value="{{ $image->caption }}" placeholder="Caption" required  >
            <select name="gallery_id" id=""  class="w-full p-2 mt-5 border-2 border-blue-500 rounded-lg ">
                <option value="">Choose Gallery</option>
                <option value=""></option>
                @foreach ($galleries as $gallery)
                    <option value="{{ $gallery->id }}">{{ $gallery->name }}</option>
                @endforeach

            </select>
            <div class="w-1/4 mx-auto h-auto mt-5 p-2 bg-cover">
                <img id="preview-image-before-upload" src="{{ asset('storage/images/'.$image->image) }}"
                alt="preview image" >
            </div>
            <input type="file" name="image" id="image" class="border-2 border-blue-500 mt-5 p-2 w-full rounded-lg">

            <div class="flex items-center justify-center mt-4">


                <x-button class="ml-4">
                    {{ __('update') }}
                </x-button>
            </div>
        </form>
    </div>
    @push('scripts')
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function (e) {
           $('#image').change(function(){
            let reader = new FileReader();
            reader.onload = (e) => {
              $('#preview-image-before-upload').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
           });
        });
        </script>
    @endpush
</x-app-layout>
