
@vite(['resources/css/app.css','resources/js/app.js'])

@extends('layouts.appUser')
  
  @section('content')
  <div class=" w-screen font-Kanit">

    <!-- Jumbotron -->
      <div id="default-carousel" class="mt-7 relative w-screen " data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="relative h-56 overflow-hidden rounded-sm sm:h-[475px] lg:h-[540px] xl:h-[600px] 2xl:h-[700px]">
          
          {{-- LAYER AND TEXT --}}
          <div class="flex justify-center absolute w-full h-full">
            <div class=" absolute w-full h-full bg-white opacity-60 z-30"></div>
          
            {{-- AREA TEXT --}}
            <div class=" border-b-orange-500 flex flex-col items-center justify-center z-40">
              <h1 class="text-base sm:text-xl lg:text-2xl xl:text-3xl font-extrabold">SERVING GOD'S PURPOSE IN OUR GENERATION</h1>
              <img class="my-2 w-16 h-16 sm:w-24 sm:h-24 md:w-28 md:h-28 xl:w-32 xl:h-32" src="{{ asset('local_images/logo.png') }}">
              <h1 class="text-base sm:text-xl lg:text-2xl xl:text-3xl font-extrabold">YAYASAN PENDIDIKAN COVENANT INDONESIA</h1>
            </div>
            {{-- END OF AREA TEXT --}}
          </div>
          {{-- END OF LAYER AND TEXT --}}
            
          <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('local_images/bannerHome1.jpg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('local_images/bannerHome2.jpg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 3 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('local_images/bannerVolunts.png') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 4 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('local_images/bannerHome3.jpg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
        </div>

        <!-- Slider indicators -->
        <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
            <button type="button" class="w-2 h-2 sm:w-3 sm:h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
            <button type="button" class="w-2 h-2 sm:w-3 sm:h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
            <button type="button" class="w-2 h-2 sm:w-3 sm:h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="2"></button>
            <button type="button" class="w-2 h-2 sm:w-3 sm:h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
        </div>
        <!-- Slider controls -->
        <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
            <span class="inline-flex items-center justify-center w-7 h-7 sm:w-10 sm:h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-3 h-3 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
            <span class="inline-flex items-center justify-center w-7 h-7 sm:w-10 sm:h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-3 h-3 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
      </div>
    <!-- Jumbotron -->
    
    {{-- AREA CONTENT --}}
    <div class="mt-20 mx-5 sm:mx-7 sm:mt-24 md:mt-32 lg:mt-44 md:mx-20 lg:mx-24 flex flex-col justify-center items-center ">
      
      {{-- AREA 1 --}}
      <div class="flex flex-col sm:mx-8 items-center md:flex-row md:gap-12 md:mx-0 ">
        <img class="rounded-md w-11/12 sm:w-7/12 md:w-5/12 xl:w-4/12" src="{{ asset('local_images/foto1.jpg') }}" alt="Image">
        <div class="justify-center text-justify md:text-left lg:mb-16">
          <h3 class="mt-7 sm:mt-14 md:mt-0 text-xl md:text-2xl lg:text-3xl font-bold">Panti Asuhan Rumah Belajar Covenant</h3>
          <p class="mt-2 md:mt-10 text-base md:text-lg lg:text-xl">Paud covenant didirikan pada tanggal 11 Januari 2022. Sejarah berdirinya paud covenant sangatlah unik, Kami memulai-nya dengan cara mencari 
            anak anak yang berada dijalanan yang kurang mampu dalam bersekolah dan anak yang kurang mendapatkan perhatian dari orang tuanya. Kami memberikan mereka fasilitas belajar seperti: mewarnai, belajar ilmu pengetahuan, 
            menulis, dan masi banyak lagi demi masa depan mereka yang lebih baik.
          </p>
        </div>
      </div>

      {{-- AREA 2 --}}
      <div class="mt-20 sm:mt-32 md:mt-32 xl:mt-36 sm:mx-8 flex flex-col items-center justify-center lg:flex-row-reverse md:gap-8 lg:gap-11 md:mx-0 ">
        <img class="rounded-md w-11/12 md:w-8/12 lg:w-3/5 lg:h-2/5 xl:w-2/4 xl:h-1/4" src="{{ asset('local_images/foto2.png') }}" alt="Image">
        <div class="text-justify lg:text-left">
          <h3 class="mt-7 lg:mt-0 sm:mt-14 text-xl md:text-2xl lg:text-2xl xl:text-3xl font-bold">Rumah Belajar Covenant</h3>
          <p class="mt-3 md:mt-10 text-base md:text-lg lg:text-lg xl:text-xl">Sekarang Paud covenant telah membantu lebih dari <span class="font-bold">80</span> anak yang kurang mampu dalam belajar, kami berusaha membuat rumah belajar covenant 
            senyaman mungkin untuk anak-anak jalanan belajar dan lebih merasa aman selama pembelajaran berlangsung. Seiring berjalanannya waktu, anak anak jalanan lebih memilih mencari uang dan bermain dari pada harus bersekolah dan belajar. Tetapi, itu bukanlah halangan bagi kami untuk 
            terus membantu anak-anak jalanan dalam mendapatkan ilmu, demi masa depan mereka.
          </p>
        </div>
      </div>

      {{-- AREA LIVE TRACKER --}}
      <div class="w-[95%] py-2 lg:py-3 lg:px-6 sm:w-11/12 lg:w-9/12 2xl:w-7/12 mt-12 sm:mt-28 md:mt-36 lg:mt-36 xl:mt-40 flex flex-row justify-center border border-fourth rounded-xl lg:gap-20 gap-5 sm:gap-x-14">
        <div class="mt-2 flex flex-col text-center items-center">
            <img class="w-7 h-7 sm:w-10 sm:h-10 lg:w-10 lg:h-10" src="{{ asset('local_images/iconKegiatan.png') }}" alt="">
            <p class="mt-1 lg:mt-2 text-lg sm:text-2xl lg:text-3xl font-extrabold">{{ $jumlahKegiatan }}</p>
            <p class="text-xs sm:text-base lg:text-base lg:mt-1 lg:font-semibold font-normal">Kegiatan</p>
        </div>
        <div class="w-20 sm:w-auto mt-2 flex flex-col text-center items-center">
            <img class="w-7 h-7 sm:w-10 sm:h-10 lg:w-10 lg:h-10" src="{{ asset('local_images/iconMarginal.png') }}" alt="">
            <p class="mt-1 lg:mt-2 text-lg sm:text-2xl lg:text-3xl font-extrabold">1.300+</p>
            <p class="text-xs sm:text-base lg:text-base lg:mt-1 lg:font-semibold font-normal">Masyarakat Marginal</p>
        </div>
        <div class="mt-2 flex flex-col text-center items-center">
            <img class="w-7 h-7 sm:w-10 sm:h-10 lg:w-10 lg:h-10" src="{{ asset('local_images/iconHearth.png') }}" alt="">
            <p class="mt-1 lg:mt-2 text-lg sm:text-2xl lg:text-3xl font-extrabold">10,500+</p>
            <p class="text-xs sm:text-base lg:text-base lg:mt-1 lg:font-semibold font-normal">Supporter</p>
        </div>
        <div class="mt-2 flex flex-col text-center items-center">
            <img class="w-7 h-7 sm:w-10 sm:h-10 lg:w-10 lg:h-10" src="{{ asset('local_images/iconVolunteer.png') }}" alt="">
            <p class="mt-1 lg:mt-2 text-lg sm:text-2xl lg:text-3xl font-extrabold">{{ $jumlahVolunteer }}</p>
            <p class="text-xs sm:text-base lg:text-base lg:mt-1 lg:font-semibold font-normal">Volunteer</p>
        </div>
      </div>
      {{-- END OF AREA LIVE TRACKER --}}
       
      <h1 class="mt-12 sm:mt-20 md:mt-36 text-lg sm:text-xl md:text-2xl lg:text-3xl font-bold">Jadwal Kegiatan</h1>
      {{-- AREA JADWAL --}}
      <div class="flex flex-col mt-5 sm:mt-10 md:mt-12 gap-3">
        {{-- ITEM --}}
        <div class="flex flex-col w-[367px] sm:w-[680px] sm:max-w-screen-sm md:max-w-none md:w-[700px] lg:w-[850px] xl:w-[1000px]">
          @foreach($kegiatans as $kegiatan)
          <div id="{{ $kegiatan->id }}" class="mt-4 2xl:mt-8 px-3 py-1 md:py-2 lg:py-3 lg:px-4 xl:py-5 xl:px-7 text-sm md:text-lg lg:text-xl md:font-semibold flex flex-row justify-between items-center cursor-pointer rounded-2xl bg-utama" onclick="toggleOverlay({{ $kegiatan->id }})">
              <p class="font-medium md:font-semibold">{{ $kegiatan->nama_kegiatan }} </p>
              <p  class="">+</p>
          </div>
          {{-- OVERLAY DETAIL --}}
          <div id="a{{ $kegiatan->id }}" class="overlay md:text-base lg:text-lg lg:font-normal  hidden relative px-2 pb-3 md:px-3 md:pb-4 lg:px-7 lg:pb-10 rounded-b-lg text-xs flex flex-col w-full bg-five transition-transform duration-500 ease-in-out">
            
              <div class="mt-2 sm:mt-4 md:mt-6 flex flex-row justify-between ">
                  <div class="">
                      <p>{{ $kegiatan->tanggal }}</p>
                      <p>Oleh <span class="font-bold">{{ $kegiatan->penyelenggara }}</span></p>
                      <p>Di {{ $kegiatan->lokasi }}</p>
                  </div>
                  <p>
                    {{ $kegiatan->formattedTime }} WIB
                  </p>
              </div>
              <div class="mt-4 sm:mt-6 md:mt-9 w-44 sm:w-full ">
                  <p>{{ $kegiatan->deskripsi }}</p>
              </div>
          </div>
          @endforeach
        </div>

        
      </div>

      <h2 class="mt-12 text-lg md:mt-36 lg:mt-48 sm:text-xl  md:text-2xl lg:text-3xl font-bold">Kerja Sama</h2>
      {{-- AREA KERJA SAMA --}}
      <div class="mb-7 2xl:mb-20 mt-6 md:mt-12 grid grid-cols-2 lg:grid-cols-5 gap-5  lg:gap-12 xl:gap-16">
        <div class="rounded-full bg-gray-600 w-24 h-24 lg:w-32 lg:h-32"></div>
        <div class="rounded-full bg-gray-600 w-24 h-24 lg:w-32 lg:h-32"></div>
        <div class="rounded-full bg-gray-600 w-24 h-24 lg:w-32 lg:h-32"></div>
        <div class="rounded-full bg-gray-600 w-24 h-24 lg:w-32 lg:h-32"></div>
        <div class="rounded-full bg-gray-600 w-24 h-24 lg:w-32 lg:h-32"></div>
      </div>

    </div>

  </div>

  <script>
    function toggleOverlay(a) {
      const overlay = document.getElementById("a" + a);
      setTimeout(() => {
        overlay.classList.toggle('hidden');
      }, 0);
    }
  </script>
  @endsection
