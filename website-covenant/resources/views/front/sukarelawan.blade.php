
@vite(['resources/css/app.css','resources/js/app.js'])
@extends('layouts.appUser')
  <style>
    @media screen and (max-width: 767px) {
    .a {
        text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.3);
    }
    .b {
        text-shadow: 1px 1px 0px rgba(0, 0, 0, 0.3);
    }
}
  </style>
@section('content')
<div class="min-h-screen flex flex-col justify-center font-Kanit">

        <!-- Jumbotron -->
        <div id="jumbotron" class="relative h-[500px] lg:h-[615px] 2xl:h-[786px]  overflow-hidden bg-cover bg-no-repeat" style="background-position: 50%;
              background-image: url('{{ asset('local_images/bannerVolunts.png') }}');
              ;">
            <div class="absolute top-0 left-0 w-full h-full bg-black bg-opacity-40"></div>
            <div class="absolute top-0 left-0 w-11/12 h-full bg-gradient-to-r  from-third to-transparen bg-opacity-100"></div>
            <div class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-fixed">
                
                <div data-aos="fade-down" data-aos-once="true" data-aos-duration="1000" class="flex ml-4 xl:w-[620px] h-full items-start  mt-[30%]  sm:mt-[21%] md:mt-[16%] lg:mt-[18%] xl:mt-[10%] 2xl:mt-[13%] sm:px-5 md:px-7 xl:px-12">
                    <div class="text-left max-w-screen-md text-black">
                        <h1 class="a text-3xl md:text-4xl lg:text-5xl xl:text-6xl 2xl:text-7xl font-extrabold tracking-wider " style="text-shadow: 2px 2px 2px rgba(0, 0, 0, 0.5);">
                        THESE ARE<br /><span>OUR VOLUNTEERS</span>
                        </h1>
                        <p class="a text-lg md:text-xl xl:text-2xl 2xl:text-3xl font-semibold mt-[7%] sm:mt-[5%] lg:mt-[3%] xl:mt-[6%]" style="text-shadow: 1px 1px 0px rgba(0, 0, 0, 0.5);">
                            Who We Are
                        </p>
                        <p class="a text-white text-sm sm:text-md md:text-base lg:text-lg 2xl:text-xl  mt-2 w-[45%] sm:w-[41%] xl:w-[60%] 2xl:w-[75%]" style="text-shadow: 2px 2px 1px rgba(0, 0, 0, 0.5);">
                            Kami bersama bersatu, demi menolong masa depan anak-anak yang seharusnya mendapatkan hak yang sama seperti anak yang lain.
                        </p>
                    </div>
                </div>

            </div>
        </div>
        <!-- Jumbotron -->

    {{-- CONTAINER GEDE --}}
    <div class="w-screen px-8 flex flex-col mt-20 lg:mt-20 xl:mt-28 2xl:mt-28 justify-center">
        {{-- AREA ATAS --}}
        <div class=" mx-3 sm:mx-16 md:mx-24 lg:mx-32 xl:mx-36 2xl:mx-40 flex flex-col item justify-center">
            
            <h2 data-aos="fade-up-left" data-aos-once="true" data-aos-duration="850"class="text-center text-xl md:text-xl lg:text-2xl xl:text-3xl 2xl:text-4xl font-semibold ">Pembina Yayasan Rumah Belajar Covenant</h2>
            
            {{-- AREA IBU --}}
            <div data-aos="fade-up-right" data-aos-once="true" data-aos-duration="850" class=" flex flex-col mt-12 md:mt-16 lg:mt-[70px] xl:mt-20 2xl:mt-28 md:flex-row md:items-center md:justify-center md:px-0 ">
                {{-- IMAGE AREA --}}
                <div class=" flex md:w-[247px] lg:w-[250px] xl:w-[365px] 2xl:w-[300px] justify-center">
                    <img class="w-6/12 sm:w-5/12 md:hidden h-full" src="{{ asset('local_images/Ibu_Jessica.png') }}" alt="ProfileIbuJessica">
                    <img class="w-full h-full hidden md:block" src="{{ asset('local_images/ibuJessica.png') }}" alt="ProfileIbuJessica">
                </div>
                {{-- TEXT AREA --}}
                <div class="md:w-[450px] lg:w-[550px] xl:w-[891px] mt-8 md:px-0 md:ml-10 md:mt-0 lg:ml-14 xl:ml-20 text-left flex flex-col">
                    <h3 class="text-base sm:text-lg md:text-lg lg:text-xl xl:text-2xl 2xl:text-3xl font-bold md:mt-0">Jessica Laura M.pd</h3>
                    <p class="mt-5 md:mt-3 text-sm sm:text-base md:text-sm lg:text-base xl:text-lg 2xl:text-xl font-light">
                        Saya peduli terhadap anak-anak jalanan yang kurang mampu dalam belajar. 
                        Maka dari situ saya membuat panti asuhan rumah belajar Covenant. 
                        Saya percaya setiap anak memiliki hak untuk masa depan yang lebih baik, dan itulah yang ingin kami wujudkan melalui panti asuhan rumah belajar Covenant.
                    </p>
                </div>
            </div>

            <h2 data-aos="fade-up-right" data-aos-once="true" data-aos-duration="850" class="text-center mt-24 md:mt-24 lg:mt-40 xl:mt-48 2xl:mt-56 text-xl md:text-xl lg:text-2xl xl:text-3xl 2xl:text-4xl  font-semibold ">Pengurus Yayasan Rumah Belajar Covenant</h2>
            
            {{-- AREA BAPAK --}}
            <div data-aos="fade-up-left" data-aos-once="true" data-aos-duration="850" class="flex flex-col mt-12 md:mt-16 lg:mt-[70px] xl:mt-20 2xl:mt-28 md:flex-row-reverse md:items-center md:justify-center md:px-0 ">
                
                {{-- IMAGE AREA --}}
                <div class="flex md:w-[247px] lg:w-[250px] xl:w-[365px] 2xl:w-[300px] justify-center">
                    <img class="w-6/12 sm:w-5/12 md:hidden h-full" src="{{ asset('local_images/bapak_polin.png') }}" alt="ProfileBapakPolin">
                    <img class="w-full h-full hidden md:block" src="{{ asset('local_images/bapakPolin.png') }}" alt="ProfileBapakPolin">
                </div>
                {{-- END IMAGE AREA --}}

                {{-- TEXT AREA --}}
                <div class="md:w-[450px] lg:w-[550px] xl:w-[891px] mt-8 md:px-0 md:mr-10 lg:mr-14 xl:mr-16 2xl:mr-20 md:mt-0 text-left md:text-right flex flex-col">
                    <h3 class="text-base sm:text-lg md:text-lg lg:text-xl  xl:text-2xl 2xl:text-3xl font-bold md:mt-0 ">Polin Tua Trimanstar Silalahi</h3>
                    <p class="mt-5 text-sm sm:text-base md:text-sm lg:text-base xl:text-lg 2xl:text-xl  font-light">
                        Dengan tekad dan semangat, kami berusaha menciptakan ruang belajar yang aman dan nyaman di Panti asuhan rumah belajar Covenant. Kami yakin bahwa pendidikan adalah kunci untuk membuka pintu masa depan, 
                        dan itulah yang ingin kami berikan kepada anak-anak yang kurang beruntung.
                    </p>
                </div>
                {{-- END TEXT AREA --}}

            </div>
            {{-- END AREA BAPAK --}}
        </div>

        {{-- AREA BAWAH --}}
        <div class=" mx-1 sm:mx-1 md:mx-5 lg:mx-6 xl:mx-14 2xl:mx-20 flex flex-col justify-center items-center">
            <h2 data-aos="fade-up-right" data-aos-once="true" data-aos-duration="850" class="text-center mt-24 text-xl md:text-xl lg:text-2xl xl:text-3xl 2xl:text-4xl font-semibold lg:mt-[15%] 2xl:mt-44">
                Pengajar Yayasan Rumah Belajar Covenant
            </h2>
            
            {{-- AREA GRID PENGAJAR --}}
            
            <div data-aos="fade-up" data-aos-once="true" data-aos-duration="850" class="mt-14 sm:mt-16 md:mt-20 lg:mt-20 xl:mt-24 2xl:mt-32 mb-14 2xl:mb-28 place-items-center grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-4 gap-5 sm:gap-8 md:gap-6 lg:gap-7 xl:gap-8 2xl:gap-x-9 ">
                @foreach($volunteers as $data => $volunteer)
                
                <div class=" group w-[160px] h-[243px] sm:w-[215px] sm:h-[304px] md:w-[190px] md:h-[284px] lg:w-[220px] lg:h-[314px] xl:w-[260] xl:h-[374] 2xl:w-[283] 2xl:h-[397] transform hover:group-hover:bg-black-opacity-2 transition duration-1000 hover:scale-105 relative">
                    
                    <div class="rounded-b-xl group-hover:opacity-100 cursor-default absolute bottom-0 w-full h-[80px] sm:h-[77px] md:h-[75px] lg:h-[85px] xl:h-[100px] 2xl:h-[110px] bg-utama bg-opacity-80 text-left flex flex-col justify-center  opacity-0 transition duration-700">
                        <p class="ml-3 sm:ml-3 md:ml-3 lg:ml-4 xl:ml-4 text-sm sm:text-sm md:text-sm lg:text-base xl:text-lg 2xl:text-lg font-semibold">{{$volunteer->nama}}</p>
                        <p class="ml-3 sm:ml-3 md:ml-3 lg:ml-4 xl:ml-4 text-xs sm:text-sm md:text-sm lg:text-sm xl:text-base 2xl:text-base">{{$volunteer->asal}}</p>
                    </div>
                    
                    <img class="w-full h-full object-cover rounded-xl" src="{{asset('storage/' . $volunteer->photo)}}" alt="">
                
                </div>
                @endforeach
            </div>
        </div>
    </div>

</div> 
@endsection