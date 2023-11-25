@vite(['resources/css/app.css','resources/js/app.js'])
@extends('layouts.app')

@section('content')
<div class="w-screen mt-20 font-Kanit flex flex-col items-center">
    <div class="flex flex-col items-center pt-10">
        <h1 class="text-3xl">Kegiatan</h1>
    </div>
    
    <div class="w-screen py-10">
        <section class="bg-center bg-no-repeat bg-blend-multiply flex flex-col items-center justify-center h-screen" style="background-image: url('{{ asset('storage/local_images/bannercb.png') }}');">
            <div class="px-4 md:px-8 lg:px-16  w-full max-w-3xl text-center font-Kanit">
                <h1 class="mb-4 text-4xl md:text-6xl lg:text-7xl font-bold leading-tight">
                    Belajar Mewarnai
                </h1>
                <h3 class="text-xl md:text-2xl lg:text-3xl pb-6">
                    1 Oktober 2023
                </h3>
                <p class="text-base md:text-lg lg:text-xl">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </p>
            </div>
        </section>
        
    </div>

    <div class="mx-auto w-full max-w-screen-xl">
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 lg:gap-36 justify-center">
    <div class="card relative bg-white overflow-hidden shadow-md rounded-xl transform hover:bg-black-opacity-2 transition duration-700 hover:scale-105">
        <img class="object-cover w-full h-full" src="{{ asset('storage/local_images/volunt.png') }}" alt="profile-picture" />
    </div>
    <div class="card relative bg-white overflow-hidden shadow-md rounded-xl transform hover:bg-black-opacity-2 transition duration-700 hover:scale-105">
        <img class="object-cover w-full h-full" src="{{ asset('storage/local_images/volunt.png') }}" alt="profile-picture" />
    </div>
    <div class="card relative bg-white overflow-hidden shadow-md rounded-xl transform hover:bg-black-opacity-2 transition duration-700 hover:scale-105">
        <img class="object-cover w-full h-full" src="{{ asset('storage/local_images/volunt.png') }}" alt="profile-picture" />
    </div>
</div>
</div>




<div class="py-5 md:py-10 ">
<h2 class="text-lg md:text-xl lg:text-2xl xl:text-3xl">SUPPORTED BY</h2>
</div>
<div class="flex flex-row">
<div>
    <h1 class="text-3xl">staff covenant</h1>
</div>

<div class="ml-20">
    <h2 class="text-3xl">volunteer</h2>
</div>

<div class="ml-20">
    <h2 class="text-3xl">sponsor ketua/org</h2>
</div>
</div>



</div>

@endsection