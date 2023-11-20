<!DOCTYPE html>
<html lang="en">
<head>
    @vite(['resources/css/app.css','resources/js/app.js'])
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/home.css">
    <title>Document</title>
</head>
<body>
@extends('layouts.app')
  
@section('content')
    <div class="flex flex-col items-center py-8 px-7 sm:px-14 md:px-11 lg:px-24 xl:px-32 2xl:px-44 font-Kanit">
        <h1 class="text-xl sm:text-xl lg:text-3xl font-bold py-10">Galleri</h1>
        <div class="py-8 grid grid-cols-2 md:grid-cols-3 gap-6">
            @foreach($image as $item)
                
                    @if($item->image)
                        <div class="image-container cursor-pointer shadow-blue-gray-500/40 transform hover:bg-black-opacity-2 transition duration-1000 hover:scale-105">
                            <img class="h-auto max-w-full rounded-lg " src="{{ asset('storage/images/'.$item->image) }}" alt="">
                        </div>
                    @endif
                
            @endforeach
        </div>

        <!-- Popup Container -->
        <div class="fixed top-0 left-0 w-full h-full flex flex-col items-center justify-center hidden bg-black bg-opacity-70" onclick="closePopup()" id="popup-container">
            <div class="overflow-hidden">
                <img class="max-w-xs max-h-xs sm:max-w-sm sm:max-h-sm md:max-w-md md:max-h-md lg:max-w-lg lg:max-h-lg object-contain" id="popup-image" src="" alt="">
            </div>
        </div>  
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
</body>
</html>
