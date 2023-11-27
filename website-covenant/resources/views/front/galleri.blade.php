
@vite(['resources/css/app.css','resources/js/app.js'])
@extends('layouts.appUser')
  
@section('content')
<div class="w-screen mt-20 font-Kanit">
    {{-- AREA CONTENT --}}
    <div class="mx-5 my-8 flex flex-col items-center">
        <h1 class="text-xl lg:text-3xl font-bold py-10">Galleri</h1>
        {{-- AREA GRID GALLERY --}}
        <div class="mx-5 sm:mx-10 md:mx-10 lg:mx-15 xl:mx-24 2xl:mx-32 grid grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-4">
            <div class="grid gap-4 ">
                @foreach($bagian1 as $item)
                <div class="image-container">
                    <img class="h-auto max-w-full rounded-lg cursor-pointer transform hover:bg-black-opacity-2 transition duration-300 hover:scale-105" src="{{ asset('storage/images/'.$item->image) }}" alt="">
                </div>
                @endforeach
            </div>
            <div class="grid gap-4 ">
                @foreach($bagian2 as $item)
                <div class="image-container">
                    <img class="h-auto max-w-full rounded-lg cursor-pointer transform hover:bg-black-opacity-2 transition duration-300 hover:scale-105" src="{{ asset('storage/images/'.$item->image) }}"alt="">
                </div>
                @endforeach
            </div>
            <div class="grid gap-4 ">
                @foreach($bagian3 as $item)
                <div class="image-container ">
                    <img class="h-auto max-w-full rounded-lg cursor-pointer transform hover:bg-black-opacity-2 transition duration-300 hover:scale-105" src="{{ asset('storage/images/'.$item->image) }}"alt="">
                </div>
                @endforeach
            </div>
            <div class="grid gap-4 ">
                @foreach($bagian4 as $item)
                <div class="image-container ">
                    <img class="h-auto max-w-full rounded-lg cursor-pointer transform hover:bg-black-opacity-2 transition duration-300 hover:scale-105" src="{{ asset('storage/images/'.$item->image) }}"alt="">
                </div>
                @endforeach
            </div>
            
        </div>
    </div>
    {{-- POPUP CONTAINER AREA --}}
    <div class="fixed top-0 left-0 w-full h-full flex flex-col items-center justify-center hidden bg-black bg-opacity-70" onclick="closePopup()" id="popup-container">
        <div class="overflow-hidden">
            <img class="rounded-lg mt-14 max-w-xs max-h-xs sm:max-w-sm sm:max-h-sm md:max-w-md md:max-h-md lg:max-w-lg lg:max-h-lg object-contain" id="popup-image" src="" alt="">
        </div>
    </div>
    {{--END OF POPUP CONTAINER  --}}

</div>

    <script>
        const imageContainers = document.querySelectorAll('.image-container');
        const popupContainer = document.getElementById('popup-container');
        const popupImage = document.getElementById('popup-image');
    
        imageContainers.forEach((imageContainer) => {
            imageContainer.addEventListener('click', () => {
                const imageUrl = imageContainer.querySelector('img').src;
                popupImage.src = imageUrl;
                popupContainer.classList.remove('hidden');
            });
        });
    
        function closePopup() {
            popupContainer.classList.add('hidden');
        }
    </script>
@endsection
