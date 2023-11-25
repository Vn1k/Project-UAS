
@vite(['resources/css/app.css','resources/js/app.js'])
@extends('layouts.app')
  
@section('content')
<div class="min-h-screen font-Kanit">
        <!-- Jumbotron -->
        <div class="mt-1 relative h-[500px] md:h-[500px] lg:h-[550px] xl:h-[580px] 2xl:h-[750px]  overflow-hidden bg-cover bg-no-repeat" style="background-position: 50%;
              background-image: url('{{ asset('images/bannerVolunts.png') }}');
              ;">
            <div class="absolute top-0 left-0 w-full h-full bg-black bg-opacity-40"></div>
            <div class="absolute top-0 left-0 w-3/4 h-full bg-gradient-to-r  from-third to-transparen bg-opacity-100"></div>
            <div class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-fixed">
                
                <div class="flex px-2 xl:w-[620px] h-full items-start  mt-[18%]  sm:mt-[10%] md:mt-[6%] lg:mt-[15%] xl:mt-[8%] 2xl:mt-[10%] sm:px-5 md:px-7 xl:px-12">
                    <div class="text-left max-w-screen-md text-black">
                        <h1 class="text-4xl md:text-5xl xl:text-6xl 2xl:text-7xl font-extrabold tracking-wider " style="text-shadow: 2px 2px 2px rgba(0, 0, 0, 0.5);">
                        THESE ARE<br /><span>OUR VOLUNTEERS</span>
                        </h1>
                        <p class="text-lg xl:text-2xl 2xl:text-3xl font-semibold mt-[7%] sm:mt-[5%] lg:mt-[3%] xl:mt-[6%] 2xl: " style="text-shadow: 2px 2px 2px rgba(0, 0, 0, 0.5);">Who We Are </p>
                        <p class="text-white text-sm sm:text-md md:text-base lg:text-lg 2xl:text-xl  mt-2 w-[45%] sm:w-[41%] xl:w-[60%] 2xl:w-[75%]" style="text-shadow: 5px 5px 4px rgba(0, 0, 0, 0.5);">
                            Kami bersama bersatu, demi menolong masa depan anak-anak yang seharusnya mendapatkan hak yang sama seperti anak yang lain.
                        </p>
                    </div>
                </div>

            </div>
        </div>
        <!-- Jumbotron -->

    {{-- CONTAINER GEDE --}}
    <div class="w-screen px-2 flex flex-col mt-20 justify-center">
        
      {{-- AREA CONTENT  --}}
        <h2 class="text-center text-2xl sm:text-xl lg:text-2xl xl:text-3xl 2xl:text-4xl font-semibold px-3">Pembina Yayasan Rumah Belajar Covenant</h2>
        
        {{-- AREA IBU --}}
        <div class="flex flex-col md:flex-row md:mx-8 md:items-center md:px-0 lg:mx-20 lg:mt-20 xl:mx-32 2xl:mx-44  mt-7 md:mt-10 px-4">
            
            {{-- IMAGE AREA --}}
            <div class="flex md:w-11/12 lg:w-8/12 xl:w-6/12 2xl:w-6/12 justify-center">
                <img class="w-4/5 sm:w-6/12 md:hidden h-full" src="{{ asset('images/Ibu_Jessica.png') }}" alt="ProfileIbuJessica">
                <img class="w-full h-full hidden md:block" src="{{ asset('images/ibuJessica.png') }}" alt="ProfileIbuJessica">
            </div>
            {{-- END IMAGE AREA --}}

            {{-- TEXT AREA --}}
            <div class="px-3 md:px-0 md:ml-5 mt-1 md:mt-0 lg:ml-7 xl:ml-14 text-left flex flex-col">
                <h3 class="text-2xl sm:text-xl xl:text-2xl 2xl:text-3xl font-semibold md:mt-0 mt-9">Jessica Laura M.pd</h3>
                <p class="mt-4 text-lg sm:text-base lg:text-lg 2xl:text-xl font-normal">
                    Saya peduli terhadap anak-anak yang seharusnya mendapatkan hak yang sama dengan anak-anak seumurannya. Maka dari situ
                    saya membuat sekolah ini bernama Panti asuhan Covenant.
                </p>
            </div>
            {{-- END TEXT AREA --}}

        </div>
        {{-- END OF AREA IBU --}}

        <h2 class="text-center text-2xl sm:text-xl lg:text-2xl xl:text-3xl 2xl:text-4xl font-semibold px-3 mt-[21%] lg:mt-[17%]">Pengurus Yayasan Rumah Belajar Covenant</h2>
        
        {{-- AREA BAPAK --}}
        <div class="flex flex-col md:flex-row-reverse md:items-center md:mx-8 md:px-0 md:mt-10 lg:mx-20 lg:mt-20 xl:mx-32 2xl:mx-44 mt-9 px-4">
            
            {{-- IMAGE AREA --}}
            <div class="flex md:w-full lg:w-9/12 xl:w-6/12 justify-center">
                <img class="w-4/5 sm:w-6/12 md:hidden h-full" src="{{ asset('images/bapak_polin.png') }}" alt="ProfileBapakPolin">
                <img class="w-full h-full hidden md:block" src="{{ asset('images/bapakPolin.png') }}" alt="ProfileBapakPolin">
            </div>
            {{-- END IMAGE AREA --}}

            {{-- TEXT AREA --}}
            <div class="px-3 md:px-0 md:mr-5 lg:mr-7 mt-1 md:mt-0 text-right flex flex-col">
                <h3 class="text-2xl sm:text-xl xl:text-2xl 2xl:text-3xl font-semibold md:mt-0 mt-9">Polin Tua Trimanstar Silalahi</h3>
                <p class="mt-4 text-lg sm:text-base lg:text-lg 2xl:text-xl font-normal">
                    Saya hanya ingin membuat semua anak mendapatkan hak yang sama, kasih sayang sama.
                    Saya peduli terhadap anak-anak, semua anak-anak berhak mendapatkan kasih sayang yang sama
                </p>
            </div>
            {{-- END TEXT AREA --}}

        </div>
        {{-- END AREA BAPAK --}}

        <h2 class="text-center text-2xl  sm:text-xl lg:text-2xl xl:text-3xl font-semibold px-3 mt-[20%]">Pengajar Yayasan Rumah Belajar Covenant</h2>
        
        {{-- AREA GRID PENGAJAR --}}
        <div class="mt-7 lg:mt-10 xl:mt-16 mb-14 2xl:mb-28 px-3 place-items-center grid grid-cols-2 md:grid-cols-3 xl:grid-cols-4 md:gap-x-0 lg:mx-9 xl:mx-16 gap-5">
            <div class="group w-11/12 lg:w-9/12 xl:w-10/12 transform hover:group-hover:bg-black-opacity-2 transition duration-1000 hover:scale-105 relative">
                <div class="group-hover:opacity-100 cursor-default absolute bottom-0 w-full h-1/3 bg-utama bg-opacity-70 text-center flex flex-col justify-center items-center opacity-0 transition duration-700">
                    <p class="text-sm lg:text-base xl:text-lg 2xl:text-xl font-semibold">Maria Christy</p>
                    <p class="text-sm lg:text-base xl:text-lg 2xl:text-xl">Kota Tangerang</p>
                </div>
                <img class="w-full h-full" src="{{ asset('images/volunt.png') }}" alt="">
            </div>
            

            <div class="group w-11/12 lg:w-9/12 xl:w-10/12 transform hover:group-hover:bg-black-opacity-2 transition duration-1000 hover:scale-105 relative">
                <div class="group-hover:opacity-100 cursor-default absolute bottom-0 w-full h-1/3 bg-utama bg-opacity-70 text-center flex flex-col justify-center items-center opacity-0 transition duration-700">
                    <p class="text-sm lg:text-base xl:text-lg 2xl:text-xl font-semibold">Maria Christy</p>
                    <p class="text-sm lg:text-base xl:text-lg 2xl:text-xl">Kota Tangerang</p>
                </div>
                <img class="w-full h-full" src="{{ asset('images/volunt.png') }}" alt="">
            </div>
            <div class="group w-11/12 lg:w-9/12 xl:w-10/12 transform hover:group-hover:bg-black-opacity-2 transition duration-1000 hover:scale-105 relative">
                <div class="group-hover:opacity-100 cursor-default absolute bottom-0 w-full h-1/3 bg-utama bg-opacity-70 text-center flex flex-col justify-center items-center opacity-0 transition duration-700">
                    <p class="text-sm lg:text-base xl:text-lg 2xl:text-xl font-semibold">Maria Christy</p>
                    <p class="text-sm lg:text-base xl:text-lg 2xl:text-xl">Kota Tangerang</p>
                </div>
                <img class="w-full h-full" src="{{ asset('images/volunt.png') }}" alt="">
            </div>
            <div class="group w-11/12 lg:w-9/12 xl:w-10/12 transform hover:group-hover:bg-black-opacity-2 transition duration-1000 hover:scale-105 relative">
                <div class="group-hover:opacity-100 cursor-default absolute bottom-0 w-full h-1/3 bg-utama bg-opacity-70 text-center flex flex-col justify-center items-center opacity-0 transition duration-700">
                    <p class="text-sm lg:text-base xl:text-lg 2xl:text-xl font-semibold">Maria Christy</p>
                    <p class="text-sm lg:text-base xl:text-lg 2xl:text-xl">Kota Tangerang</p>
                </div>
                <img class="w-full h-full" src="{{ asset('images/volunt.png') }}" alt="">
            </div>
        </div>
    </div>

            {{-- DIV AREA BAWAH --}}
            {{-- <div class="flex flex-col items-center">
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
            </div> --}}


</div> 
@endsection