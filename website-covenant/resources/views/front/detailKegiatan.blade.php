
@vite(['resources/css/app.css','resources/js/app.js'])
@extends('layouts.appUser')
    
    @section('content')
    <style>
        @media (max-width: 767px) {
          .p {
            margin-left: 20px; 
            margin-right: 20px; 
            margin-botton : 20px;
            margin-top : 20px;
          }
        }
      </style>
      
    <div class="mt-20 w-screen mb-20 font-Kanit flex flex-col items-center">
        <div class="flex flex-col items-center pt-10">
            <h1 class="text-3xl font-bold">Kegiatan</h1>
        </div>
        <div class="w-screen py-10">
            <section class="w-screen bg-center bg-no-repeat bg-blend-multiply flex flex-col items-center justify-center h-screen" style="background-image: url('{{ asset('storage/'. $kegiatan->cover) }}');">
                <div class="px-4 md:px-8 lg:px-16  w-full max-w-3xl text-center font-Kanit z-20">
                    <h1 class="mb-4 text-4xl md:text-6xl lg:text-7xl font-bold leading-tight">
                        {{ $kegiatan->nama_kegiatan }}
                    </h1>
                    <h3 class="text-xl md:text-2xl lg:text-3xl pb-6">
                        {{ $kegiatan->tanggal }}
                    </h3>
                    <p class="text-base md:text-lg lg:text-xl">
                        {{ $kegiatan->deskripsi }}
                    </p>
                </div>
                <div class="absolute w-full h-full bg-white opacity-70 z-10"></div>
            </section>
        </div>
   
        <div class="mx-auto w-full max-w-screen-xl">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 lg:gap-36 justify-center">
                <div class=" p card relative bg-white overflow-hidden shadow-md rounded-xl transform hover:bg-black-opacity-2 transition duration-700 hover:scale-105">
                    <img class="object-cover w-full h-full" src="{{ asset('storage/'. $kegiatan->photo) }}" alt="Foto Kegiatan" />
                </div>
                <div class=" p card relative bg-white overflow-hidden shadow-md rounded-xl transform hover:bg-black-opacity-2 transition duration-700 hover:scale-105">
                    <img class="object-cover w-full h-full" src="{{ asset('storage/'. $kegiatan->photo2) }}" alt="Foto Kegiatan" />
                </div>
                <div class=" p card relative bg-white overflow-hidden shadow-md rounded-xl transform hover:bg-black-opacity-2 transition duration-700 hover:scale-105">
                    <img class="object-cover w-full h-full" src="{{ asset('storage/'. $kegiatan->photo3) }}" alt="Foto Kegiatan" />
                </div>
            </div>
        </div>

        <div class="flex flex-col justify-center items-center">
            <h2 class="py-10 md:py-10 text-lg md:text-xl lg:text-2xl xl:text-3xl">SUPPORTED BY</h2>
            <div class="flex flex-col md:flex-row justify-center mt-5 items-center">
                @foreach($kegiatan->volunteers as $volunteer) 
                <div class="flex flex-col text-center mb-10 md:mb-0 md:mr-20">
                    <h1 class="font-bold text-2xl lg:text-3xl">Volunteer</h1>
                    <p class="mt-5 text-xl">{{ $volunteer->nama }}</p>
                </div>
                @endforeach

                @foreach($kegiatan->sponsors as $sponsor)
                <div class="flex flex-col  text-center md:">
                    <h2 class="font-bold text-2xl lg:text-3xl">Sponsor</h2>
                    <p class="mt-5 text-xl">{{ $sponsor->instansi }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </div>



   
    @endsection