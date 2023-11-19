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
    <div class=" flex flex-col items-center py-8 px-7 sm:px-14 md:px-11 lg:px-14 xl:px-16 2xl:px-20 font-Kanit">
        <h1 class="text-xl sm:text-xl lg:text-2xl font-medium">Galleri</h1>
        <div class="py-8 grid grid-cols-2 md:grid-cols-4 gap-6">
            <div class="grid gap-6">
                <div class="image-container cursor-pointer shadow-blue-gray-500/40 transform hover:bg-black-opacity-2 transition duration-1000 hover:scale-105">
                    <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image.jpg" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-1.jpg" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-2.jpg" alt="">
                </div>
            </div>
            <div class="grid gap-6">
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-3.jpg" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-4.jpg" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-5.jpg" alt="">
                </div>
            </div>
            <div class="grid gap-6">
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-6.jpg" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-7.jpg" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-8.jpg" alt="">
                </div>
            </div>
            <div class="grid gap-6">
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-9.jpg" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-10.jpg" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-11.jpg" alt="">
                </div>
            </div>
        </div>

        <!-- Popup Container -->
        <div class="fixed top-0 left-0 w-full h-full flex flex-col items-center justify-center hidden bg-black bg-opacity-70" onclick="closePopup()" id="popup-container">
            {{-- <span class="absolute top-4 right-4 text-white text-2xl cursor-pointer" >&times;</span> --}}
            <div class="overflow-hidden">
                <img class="max-w-xs max-h-xs sm:max-w-sm sm:max-h-sm md:max-w-md md:max-h-md lg:max-w-lg lg:max-h-lg object-contain" id="popup-image" src="" alt="">
            </div>
        </div>  

        
    </div>
    <script>
        const imageContainer = document.querySelector('.image-container');
        const popupContainer = document.getElementById('popup-container');
        const popupImage = document.getElementById('popup-image');
    
        imageContainer.addEventListener('click', () => {
            const imageUrl = imageContainer.querySelector('img').src;
            popupImage.src = imageUrl;
            popupContainer.classList.remove('hidden');
        });
    
        function closePopup() {
            popupContainer.classList.add('hidden');
        }
    </script>
@endsection
</body>

</html>