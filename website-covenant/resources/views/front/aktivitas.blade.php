@vite(['resources/css/app.css','resources/js/app.js'])
@extends('layouts.app')
  
  @section('content')
  <div class="w-screen font-Kanit">
    
    {{-- CONTAINER CONTENT --}}
    <div class="flex flex-col items-center mt-24 mx-5 sm:px-14 md:px-11 lg:px-24 xl:px-32">
        <h1 class="text-xl lg:text-3xl font-bold py-10">Kegiatan</h1>
        
        {{-- AREA GRID --}}
        <div class="grid grid-cols-2 md:grid-cols-3 gap-6">

          {{-- AREA CARD --}}
          <div class="group w-11/12 lg:w-9/12 xl:w-10/12 transform hover:group-hover:bg-black-opacity-2 transition duration-1000 hover:scale-105 relative">
            {{-- AREA HOVER --}}
            <div class="text-left group-hover:opacity-100 cursor-default absolute bottom-0 w-full h-4/6 bg-gradient-to-t  from-utama to-transparen flex flex-col justify-center opacity-0 transition duration-700">
              <div class="text-lg absolute bottom-0 mb-10  ml-5">
                <p class="text-sm lg:text-base xl:text-lg 2xl:text-xl font-semibold">Maria Christy</p>
                <p class="text-sm lg:text-base xl:text-lg 2xl:text-xl">Kota Tangerang</p>
              </div>
            </div>
            {{-- IMAGE --}}
            <img class="w-full h-full" src="{{ asset('images/volunt.png') }}" alt="">
          </div>
          {{-- AREA CARD --}}
          <div class="group w-11/12 lg:w-9/12 xl:w-10/12 transform hover:group-hover:bg-black-opacity-2 transition duration-1000 hover:scale-105 relative">
            {{-- AREA HOVER --}}
            <div class="text-left group-hover:opacity-100 cursor-default absolute bottom-0 w-full h-4/6 bg-gradient-to-t  from-utama to-transparen flex flex-col justify-center opacity-0 transition duration-700">
              <div class="text-lg absolute bottom-0 mb-10  ml-5">
                <p class="text-sm lg:text-base xl:text-lg 2xl:text-xl font-semibold">Maria Christy</p>
                <p class="text-sm lg:text-base xl:text-lg 2xl:text-xl">Kota Tangerang</p>
              </div>
            </div>
            {{-- IMAGE --}}
            <img class="w-full h-full" src="{{ asset('images/volunt.png') }}" alt="">
          </div>


          {{-- <div class="card relative bg-white shadow-md rounded-xl w-[497] h-[640] transform hover:bg-black-opacity-2 transition duration-700 hover:scale-105">
            <img class="image-container object-cover object-center max-w-full h-full" src="{{ asset('images/1kegiatan.png') }}" alt="profile-picture" />
            <div class="text-left overlay cursor-default absolute bottom-0 w-full h-3/4 bg-gradient-to-t  from-utama to-transparen flex flex-col opacity-0 transition duration-500 hover:opacity-100">
                <div class="text-lg absolute bottom-0 mb-10  ml-5">
                  <p class="text-lg font-bold">Belajar Mewarnai</p>
                  <p>1 Oktober 2023</p>
                </div>
            </div>
          </div>
          <div class="card relative bg-white overflow-hidden shadow-md rounded-xl w-[497] h-[640] transform hover:bg-black-opacity-2 transition duration-700 hover:scale-105">
            <img class="object-cover object-center w-full h-full" src="{{ asset('images/1kegiatan.png') }}" alt="profile-picture" />
            <div class="text-left overlay cursor-default absolute bottom-0 w-full h-3/4 bg-gradient-to-t  from-utama to-transparen flex flex-col opacity-0 transition duration-500 hover:opacity-100">
                <div class="text-lg absolute bottom-0 mb-10  ml-5">
                  <p class="text-lg font-bold">Belajar Mewarnai</p>
                  <p>1 Oktober 2023</p>
                </div>
            </div>
          </div>
          <div class="card relative bg-white overflow-hidden shadow-md rounded-xl w-[497] h-[640] transform hover:bg-black-opacity-2 transition duration-700 hover:scale-105">
            <img class="object-cover object-center w-full h-full" src="{{ asset('images/1kegiatan.png') }}" alt="profile-picture" />
            <div class="text-left overlay cursor-default absolute bottom-0 w-full h-3/4 bg-gradient-to-t  from-utama to-transparen flex flex-col opacity-0 transition duration-500 hover:opacity-100">
                <div class="text-lg absolute bottom-0 mb-10  ml-5">
                  <p class="text-lg font-bold">Belajar Mewarnai</p>
                  <p>1 Oktober 2023</p>
                </div>
            </div>
          </div>
          <div class="card relative bg-white overflow-hidden shadow-md rounded-xl w-[497] h-[640] transform hover:bg-black-opacity-2 transition duration-700 hover:scale-105">
            <img class="object-cover object-center w-full h-full" src="{{ asset('images/1kegiatan.png') }}" alt="profile-picture" />
            <div class="text-left overlay cursor-default absolute bottom-0 w-full h-3/4 bg-gradient-to-t  from-utama to-transparen flex flex-col opacity-0 transition duration-500 hover:opacity-100">
                <div class="text-lg absolute bottom-0 mb-10  ml-5">
                  <p class="text-lg font-bold">Belajar Mewarnai</p>
                  <p>1 Oktober 2023</p>
                </div>
            </div>
          </div> --}}

          
        </div>
      </div>
  </div>
  @endsection