
@vite(['resources/css/app.css','resources/js/app.js'])
@extends('layouts.appUser')
  
@section('content')
<div class="min-h-screen flex flex-col justify-center font-Kanit">

        <!-- Jumbotron -->
        <div id="jumbotron" class="mt-9 relative h-[470px] lg:h-[550px] xl:h-[580px] 2xl:h-[750px]  overflow-hidden bg-cover bg-no-repeat" style="background-position: 50%;
              background-image: url('{{ asset('local_images/bannerVolunts.png') }}');
              ;">
            <div class="absolute top-0 left-0 w-full h-full bg-black bg-opacity-40"></div>
            <div class="absolute top-0 left-0 w-11/12 h-full bg-gradient-to-r  from-third to-transparen bg-opacity-100"></div>
            <div class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-fixed">
                
                <div class="flex ml-4 xl:w-[620px] h-full items-start  mt-[18%]  sm:mt-[15%] md:mt-[15%] lg:mt-[15%] xl:mt-[8%] 2xl:mt-[10%] sm:px-5 md:px-7 xl:px-12">
                    <div class="text-left max-w-screen-md text-black">
                        <h1 class="text-4xl lg:text-5xl xl:text-6xl 2xl:text-7xl font-extrabold tracking-wider " style="text-shadow: 2px 2px 2px rgba(0, 0, 0, 0.5);">
                        THESE ARE<br /><span>OUR VOLUNTEERS</span>
                        </h1>
                        <p class="text-xl xl:text-2xl 2xl:text-3xl font-semibold mt-[7%] sm:mt-[5%] lg:mt-[3%] xl:mt-[6%] 2xl: " style="text-shadow: 2px 2px 2px rgba(0, 0, 0, 0.5);">Who We Are </p>
                        <p class="text-white text-base sm:text-md md:text-base lg:text-lg 2xl:text-xl  mt-2 w-[45%] sm:w-[41%] xl:w-[60%] 2xl:w-[75%]" style="text-shadow: 5px 5px 4px rgba(0, 0, 0, 0.5);">
                            Kami bersama bersatu, demi menolong masa depan anak-anak yang seharusnya mendapatkan hak yang sama seperti anak yang lain.
                        </p>
                    </div>
                </div>

            </div>
        </div>
        <!-- Jumbotron -->

    {{-- CONTAINER GEDE --}}
    <div class="w-screen px-8 flex flex-col mt-20 lg:mt-44 justify-center">
        {{-- AREA ATAS --}}
        <div class=" mx-3 sm:mx-11 md:mx-14 lg:mx-24 xl:mx-36 2xl:mx-40 flex flex-col item justify-center">
            
            <h2 class="text-center text-xl md:text-2xl lg:text-3xl font-semibold ">Pembina Yayasan Rumah Belajar Covenant</h2>
            
            {{-- AREA IBU --}}
            <div class="flex flex-col mt-12 md:mt-24 lg:mt-28 xl:mt-32 2xl:mt-40 md:flex-row md:items-center md:px-0 ">
                {{-- IMAGE AREA --}}
                <div class="flex md:w-[920px] lg:w-[945px] xl:w-[970px] justify-center">
                    <img class="w-6/12 sm:w-5/12 md:hidden h-full" src="{{ asset('local_images/Ibu_Jessica.png') }}" alt="ProfileIbuJessica">
                    <img class="w-full h-full hidden md:block" src="{{ asset('local_images/ibuJessica.png') }}" alt="ProfileIbuJessica">
                </div>
                {{-- TEXT AREA --}}
                <div class="mt-8 md:px-0 md:ml-14 md:mt-0 lg:ml-16 text-left flex flex-col">
                    <h3 class="text-lg md:text-xl lg:text-2xl font-semibold md:mt-0">Jessica Laura M.pd</h3>
                    <p class="mt-5 text-base sm:text-lg md:text-lg lg:text-2xl font-light">
                        Saya peduli terhadap anak-anak yang seharusnya mendapatkan hak yang sama dengan anak-anak seumurannya. Maka dari situ
                        saya membuat sekolah ini bernama Panti asuhan Covenant.nasjkfasfajfsakkfnwoafna
                    </p>
                </div>
            </div>

            <h2 class="text-center mt-24 md:mt-32 lg:mt-48 2xl:mt-48 text-xl md:text-2xl lg:text-3xl  font-semibold ">Pengurus Yayasan Rumah Belajar Covenant</h2>
            
            {{-- AREA BAPAK --}}
            <div class="flex flex-col mt-12 md:mt-24 lg:mt-28 xl:mt-32 md:flex-row-reverse md:items-center md:px-0 ">
                
                {{-- IMAGE AREA --}}
                <div class="flex md:w-[920px] lg:w-[945px] xl:w-[970px]  justify-center">
                    <img class="w-6/12 sm:w-5/12 md:hidden h-full" src="{{ asset('local_images/bapak_polin.png') }}" alt="ProfileBapakPolin">
                    <img class="w-full h-full hidden md:block" src="{{ asset('local_images/bapakPolin.png') }}" alt="ProfileBapakPolin">
                </div>
                {{-- END IMAGE AREA --}}

                {{-- TEXT AREA --}}
                <div class="mt-8 md:px-0 md:mr-14 lg:mr-16 md:mt-0 text-left md:text-right flex flex-col">
                    <h3 class="md:mt-0 text-lg md:text-xl lg:text-2xl font-semibold ">Polin Tua Trimanstar Silalahi</h3>
                    <p class="mt-5 text-base sm:text-lg md:text-lg lg:text-2xl  font-normal">
                        Saya hanya ingin membuat semua anak mendapatkan hak yang sama, kasih sayang sama.
                        Saya peduli terhadap anak-anak, semua anak-anak berhak kowaidoawindoaslmoijahw
                    </p>
                </div>
                {{-- END TEXT AREA --}}

            </div>
            {{-- END AREA BAPAK --}}
        </div>

        {{-- AREA BAWAH --}}
        <div class=" mx-1 sm:mx-1 md:mx-8 xl:mx-10 2xl:mx-20 flex flex-col justify-center items-center">
            <h2 class="text-center mt-24 text-xl md:text-2xl lg:text-3xl font-semibold lg:mt-[15%] 2xl:mt40">Pengajar Yayasan Rumah Belajar Covenant</h2>
            
            {{-- AREA GRID PENGAJAR --}}
            
            <div class="mt-12 md:mt-24 lg:mt-20 xl:mt-24 2xl:mt-32 mb-14 gap-5 lg:gap-14 2xl:mb-28 place-items-center grid grid-cols-2 md:grid-cols-3 xl:grid-cols-4 2xl:gap-x-9 ">
                @foreach($volunteers as $data => $volunteer)
                
                <div class="group w-11/12 sm:w-10/12 md:w-4/5 lg:w-auto  xl:w-[270px] 2xl:w-full transform hover:group-hover:bg-black-opacity-2 transition duration-1000 hover:scale-105 relative">
                    
                    <div class="rounded-b-xl group-hover:opacity-100 cursor-default absolute bottom-0 w-full h-1/3 bg-utama bg-opacity-70 text-center flex flex-col justify-center items-center opacity-0 transition duration-700">
                        <p class="text-sm sm:text-base md:text-lg lg:text-xl xl:text-2xl 2xl:text-xl font-semibold">{{$volunteer->nama}}</p>
                        <p class="text-xs sm:text-sm md:text-base lg:text-lg xl:text-xl 2xl:text-xl">{{$volunteer->asal}}</p>
                    </div>
                    
                    <img class="w-full h-full rounded-xl" src="{{asset('storage/' . $volunteer->photo)}}" alt="">
                
                </div>
                @endforeach
            </div>
        </div>
    </div>

</div> 
@endsection