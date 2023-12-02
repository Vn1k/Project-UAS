@vite(['resources/css/app.css','resources/js/app.js'])
@extends('layouts.appUser')

@section('content')
<div class="w-screen font-Kanit">

  {{-- CONTAINER CONTENT --}}
  <div class="flex flex-col items-center mt-24 mb-24 mx-5 sm:px-14 md:px-11 lg:px-11 xl:px-20">
    <h1 class="text-xl lg:text-3xl font-bold py-10">Kegiatan</h1>

    {{-- AREA GRID --}}
    <div class="grid grid-cols-2 md:grid-cols-3 gap-4 sm:gap-6 place-items-center lg:gap-1">
      @foreach($kegiatans as $kegiatan)
      {{-- AREA CARD --}}
      <a href="{{ route('detailkegiatan.show', $kegiatan->id) }}" class="rounded-b-xl group w-full lg:w-10/12 xl:w-10/12 transform hover:group-hover:bg-black-opacity-2 transition duration-500 hover:scale-105 relative">
        {{-- AREA HOVER --}}
        <div class="flex flex-row opacity-0 text-left rounded-b-xl group-hover:opacity-100 cursor-default absolute bottom-0 w-full h-4/6 bg-gradient-to-t  from-utama to-transparen transition duration-700">
          <div class="text-lg absolute bottom-0 ml-3 mb-3 sm:ml-5 sm:mb-7">
            <p class="text-sm lg:text-base xl:text-lg 2xl:text-xl font-semibold">{{ $kegiatan->nama_kegiatan }}</p>
            <p class="text-sm lg:text-base xl:text-lg 2xl:text-xl">{{ $kegiatan->jadwal }}</p>
          </div>
        </div>
        {{-- IMAGE --}}
        <img class="rounded-xl w-full h-full object-cover" src="{{ asset('storage/'. $kegiatan->cover) }}" alt="">
      </a>
      @endforeach
    </div>
  </div>
</div>
@endsection