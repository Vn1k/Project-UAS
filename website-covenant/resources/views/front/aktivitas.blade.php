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
  <div class="min-h-screen font-Kanit py-20 px-32">
    <div class="flex flex-col items-center">
      <h1 class="font-bold text-xl 2xl:text-2xl py-10"> Kegiatan</h1>
      <div class="grid grid-cols-3 gap-10">
        <div class="card relative bg-white overflow-hidden shadow-md rounded-xl w-[497] h-[640] transform hover:bg-black-opacity-2 transition duration-700 hover:scale-105">
          <img class="object-none w-full h-full" src="{{ asset('images/1kegiatan.png') }}" alt="profile-picture" />
          <div class="text-left overlay cursor-default absolute bottom-0 w-full h-3/4 bg-gradient-to-t  from-utama to-transparen flex flex-col opacity-0 transition duration-500 hover:opacity-100">
              <div class="text-lg absolute bottom-0 mb-10  ml-5">
                <p class="text-lg font-bold">Belajar Mewarnai</p>
                <p>1 Oktober 2023</p>
              </div>
          </div>
        </div>
        <div class="card relative bg-white overflow-hidden shadow-md rounded-xl w-[497] h-[640] transform hover:bg-black-opacity-2 transition duration-700 hover:scale-105">
          <img class="object-none w-full h-full" src="{{ asset('images/1kegiatan.png') }}" alt="profile-picture" />
          <div class="text-left overlay cursor-default absolute bottom-0 w-full h-2/4 bg-gradient-to-t  from-utama to-transparen flex flex-col opacity-0 transition duration-500 hover:opacity-100">
              <div class="text-lg mt-28 ml-5">
                <p class="text-lg font-bold">Belajar Mewarnai</p>
                <p>1 Oktober 2023</p>
              </div>
          </div>
        </div>
        <div class="card relative bg-white overflow-hidden shadow-md rounded-xl w-[497] h-[640] transform hover:bg-black-opacity-2 transition duration-700 hover:scale-105">
          <img class="object-none w-full h-full" src="{{ asset('images/1kegiatan.png') }}" alt="profile-picture" />
          <div class="text-left overlay cursor-default absolute bottom-0 w-full h-2/4 bg-gradient-to-t  from-utama to-transparen flex flex-col opacity-0 transition duration-500 hover:opacity-100">
              <div class="text-lg mt-28 ml-5">
                <p class="text-lg font-bold">Belajar Mewarnai</p>
                <p>1 Oktober 2023</p>
              </div>
          </div>
        </div>
        
      </div>
    </div>
  </div>
  @endsection
</body>
</html>