<!DOCTYPE html>
<html lang="en">
<head>
    @vite(['resources/css/app.css','resources/js/app.js'])
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@extends('layouts.app')
  
@section('content')
<div class="min-h-screen">
    <div class="font-Kanit">
        <section class="mt-1 bg-center bg-no-repeat bg-blend-multiply relative h-screen py-10" style="background-image: url('{{ asset('images/bannerVolunt.jpg') }}');">
            <div class="absolute top-0 left-0 w-full h-full bg-white bg-opacity-0"></div>
            <div class="absolute top-0 left-0 w-48 h-full bg-third bg-opacity-30"></div>
            <div class="absolute top-0 left-0 w-3/5 h-full bg-gradient-to-r  from-third to-transparen bg-opacity-100"></div>
            <div class="h-screen flex flex-col justify-center align-middle">
                <div class="px-4 md:px-8 lg:px-16 w-full 2xl:max-w-3xl max-w-2xl text-left font-Kanit relative">
                    <h1 class="mb-4 text-4xl md:text-6xl font-bold leading-tight" style="text-shadow: 5px 5px 4px rgba(0, 0, 0, 0.5);" > 
                        THESE ARE <br> OUR VOLUNTEERS 
                    </h1> 
                    <h3 class="drop-shadow-lg text-xl md:text-2xl lg:text-3xl pb-6" style="text-shadow: 3px 3px 4px rgba(0, 0, 0, 0.5);"> 
                        Who We Are
                    </h3> 
                    <p class="text-base md:text-lg lg:text-xl text-white" style="text-shadow: 4px 4px 4px rgba(0, 0, 0, 0.5);"> 
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                    </p> 
                </div>
            </div>
        </section>
        
    </div>

    {{-- CONTAINER GEDE --}}
    <div class="w-screen flex flex-col justify-center my-24">
        {{-- DIV AREA CONTENT  --}}
        <div class="flex flex-col mx-56">

            {{-- DIV AREA KETUA --}}
            <div class="flex flex-col items-center">

                {{-- DIV AREA IBU --}}
                <div class="flex flex-col items-center mt-20">
                    <h2 class="text-3xl font-bold py-24">Pembina Yayasan Rumah Belajar Covenant</h2>
                    <div class="flex flex-row h-[360px] overflow-hidden">
                        <img class="w-1/2 h-auto object-cover" src="{{ asset('images/ibuJesica.png') }}" alt="" srcset="">
                        <div class="ml-20 text-left flex flex-col justify-center">
                            <h3 class="text-2xl font-bold my-6">Jessica Laura M.pd</h3>
                            <p class="text-lg font-semibold">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do 
                                eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
                                nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in 
                                reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                            </p>
                        </div>
                    </div>
                </div>

                {{-- DIV AREA BAPAK --}}
                <div class="flex flex-col items-center py-36">
                    <h2 class="text-3xl font-bold py-20">Pembina Yayasan Rumah Belajar Covenant</h2>
                    <div class="flex flex-row-reverse mt-10">
                        <img class="w-1/2 h-auto object-cover" src="{{ asset('images/bapakPolin.png') }}" alt="" srcset="">
                        <div class="mr-20 text-right flex flex-col justify-center">
                            <h3 class="text-2xl font-bold my-6">Polin Tua Trimanstar Silalahi</h3>
                            <p class="text-lg font-semibold">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do 
                                eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
                                nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in 
                                reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- DIV AREA BAWAH --}}
            <div class="flex flex-col items-center">
                <h2 class="text-2xl font-bold my-24">Pengajar Yayasan Rumah Belajar Covenant</h2>
                <div class="flex flex-row gap-10 items-center">
                    <div class="card relative bg-white overflow-hidden shadow-md rounded-xl w-64 h-96 transform hover:bg-black-opacity-2 transition duration-700 hover:scale-105">
                        <img class="object-cover w-full h-full" src="{{ asset('images/volunt.png') }}" alt="profile-picture" />
                        <div class="overlay cursor-default absolute bottom-0 w-full h-1/3 bg-utama bg-opacity-60 text-center flex flex-col justify-center items-center opacity-0 transition duration-500 hover:opacity-100">
                            <p class="text-lg font-bold">Maria Christy</p>
                            <p>Kota Tangerang</p>
                        </div>
                    </div>
                    <div class="card relative bg-white overflow-hidden shadow-md rounded-xl w-64 h-96 transform hover:bg-black-opacity-2 transition duration-700 hover:scale-105">
                        <img class="object-cover w-full h-full" src="{{ asset('images/volunt.png') }}" alt="profile-picture" />
                        <div class="overlay cursor-default absolute bottom-0 w-full h-1/3 bg-utama bg-opacity-60 text-center flex flex-col justify-center items-center opacity-0 transition duration-500 hover:opacity-100">
                            <p class="text-lg font-bold">Maria Christy</p>
                            <p>Kota Tangerang</p>
                        </div>
                    </div>
                    <div class="card relative bg-white overflow-hidden shadow-md rounded-xl w-64 h-96 transform hover:bg-black-opacity-2 transition duration-700 hover:scale-105">
                        <img class="object-cover w-full h-full" src="{{ asset('images/volunt.png') }}" alt="profile-picture" />
                        <div class="overlay cursor-default absolute bottom-0 w-full h-1/3 bg-utama bg-opacity-60 text-center flex flex-col justify-center items-center opacity-0 transition duration-500 hover:opacity-100">
                            <p class="text-lg font-bold">Maria Christy</p>
                            <p>Kota Tangerang</p>
                        </div>
                    </div>
                    <div class="card relative bg-white overflow-hidden shadow-md rounded-xl w-64 h-96 transform hover:bg-black-opacity-2 transition duration-700 hover:scale-105">
                        <img class="object-cover w-full h-full" src="{{ asset('images/volunt.png') }}" alt="profile-picture" />
                        <div class="overlay cursor-default absolute bottom-0 w-full h-1/3 bg-utama bg-opacity-60 text-center flex flex-col justify-center items-center opacity-0 transition duration-500 hover:opacity-100">
                            <p class="text-lg font-bold">Maria Christy</p>
                            <p>Kota Tangerang</p>
                        </div>
                    </div>
                    
                    
                </div>
        </div>
    </div>

    </div>


</div> 
@endsection
</body>
</html>