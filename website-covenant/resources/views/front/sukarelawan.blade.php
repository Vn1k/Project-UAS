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
<div class="min-h-screen font-Kanit">
    <section class="bg-center bg-no-repeat bg-blend-multiply flex" style="background-image: url('{{ asset('images/bannersv.jpg') }}')">
        <div class="ml-24 py-72 w-1/2">
            <div class="bg-gradient-to-r from-utama to-transparent w-32">

            </div>
            <h1 class="mb-4 text-left text-4xl font-extrabold tracking-tight leading-none md:text-5xl lg:text-6xl">
                THESE ARE <br> OUR VOLUNTEERS
            </h1>
            <h3 class="text-xl text-left sh">
                Who We Are
            </h3>
            <p class="text-left text-lg font-normal lg:text-xl">
                Here at Flowbite we focus on markets where technology, innovation, and capital can unlock long-term value and drive economic growth.
            </p>
            <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0">
            </div>
        </div>
    </section>

    {{-- CONTAINER GEDE --}}
    <div class="w-screen flex flex-col justify-center my-44">
        {{-- DIV AREA CONTENT  --}}
        <div class="flex flex-col mx-56">

            {{-- DIV AREA KETUA --}}
            <div class="flex flex-col items-center">

                {{-- DIV AREA IBU --}}
                <div class="flex flex-col items-center">
                    <h2 class="text-3xl font-bold py-28">Pembina Yayasan Rumah Belajar Covenant</h2>
                    <div class="flex flex-row h-[360px] overflow-hidden">
                        <img class="w-1/2 h-auto object-cover" src="{{ asset('images/ibuJesica.png') }}" alt="" srcset="">
                        <div class="ml-20 text-left flex flex-col justify-center">
                            <h3 class="text-2xl font-bold my-6">Jessica Laura M.pd</h3>
                            <p class="text-lg">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do 
                                eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
                                nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in 
                                reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                            </p>
                        </div>
                    </div>
                </div>

                {{-- DIV AREA BAPAK --}}
                <div class="flex flex-col items-center py-36 mt-10">
                    <h2 class="text-3xl font-bold py-20">Pembina Yayasan Rumah Belajar Covenant</h2>
                    <div class="flex flex-row-reverse mt-10">
                        <img class="w-1/2 h-auto object-cover" src="{{ asset('images/bapakPolin.png') }}" alt="" srcset="">
                        <div class="mr-20 text-right flex flex-col justify-center">
                            <h3 class="text-2xl font-bold my-6">Polin Tua Trimanstar Silalahi</h3>
                            <p class="text-lg">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do 
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
                <div class="grid grid-cols-4 gap-10">
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