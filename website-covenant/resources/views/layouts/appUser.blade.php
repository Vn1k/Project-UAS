<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="icon" type="png" href="{{ asset('images/logo.png') }}">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div id="app" class="min-h-screen flex flex-col max-w-screen overflow-x-hidden">
        {{-- NAVBAR --}}
        @include('partials.navbar')
        
        {{-- CONTENT PER PAGE  --}}
        <main class="flex-1">
            @yield('content')
        </main>
        
        {{-- FOOTER --}}
        <footer class="bg-utama w-screen flex flex-row items-center justify-center text-black font-Kanit mt-20 py-11 sm:py-14 lg:py-16">
            
                
                <!-- Logo Area -->
                <a class="mx-5 sm:mx-8 md:mx-14 lg:mx-20 xl:mx-24 2xl:ml-32" href="/">
                    <img class="h-16 w-16 sm:w-20 sm:h-20 md:w-24 md:h-24 lg:w-28 lg:h-28 xl:w-32 xl:h-32 2xl:w-36 2xl:h-36" src="{{ asset('local_images/logo.png') }}" alt="Logo">
                </a>

                <!-- Konten Tengah -->
                <div class="flex flex-col text-left mr-3 w-20 sm:mr-10 md:mr-28 lg:mr-52 xl:mr-72 flex-grow">
                    <h1 class="text-base sm:text-lg md:text-xl lg:text-2xl xl:text-3xl font-bold">Panti Asuhan Rumah Belajar Covenant</h1>
                    
                    <div class="my-2 md:my-4 border w-32 sm:w-40 md:w-48 lg:w-52 xl:w-60 xl:border-2 2xl:w-72 rounded-sm border-black"></div>
                    
                    <p class="text-xs sm:text-base lg:text-lg xl:text-xl">
                        Ruko Kencana Bunda No. 88 CC RT/RW. 004, Jl. Kalindra II No. 009,
                        RT. 4/RW. 9, Cengkareng Barat, Kota Jakarta Barat, Daerah Khusus
                        IbuKota Jakarta 11730.
                    </p>
                    <div class=" py-2 flex flex-grow mt-3 justify-star items-center gap-2 xl:gap-5">
                        <a href="https://wa.me/6282187227218" class="px-6 py-1 sm:px-20 xl:px-32 xl:py-2 text-black text-center border border-black rounded-full hover:bg-black hover:text-utama hover:transform hover:-translate-y-1 transition-transform duration-700
                        text-sm sm:text-base font-bold lg:text-lg xl:text-xl">
                            HUBUNGI KAMI
                        </a>
                        <div class="border xl:border-2 h-8 rounded-sm border-black 2xl:block 2xl:h-9"></div>
                        <div class="px-2 py-1 xl:py-2 xl:px-4 text-center hover:bg-black hover:text-utama hover:transform hover:border hover:border-black hover:rounded-full hover:-translate-y-1 transition-transform duration-700">
                            <a class="font-bold text-sm sm:text-base lg:text-lg xl:text-xl" href="{{ route('admin.login') }}">
                                ADMIN
                            </a>
                        </div>
                    </div>
                </div>
        
                <!-- Social Media -->
                <div class="flex flex-col gap-3 md:gap-4 text-right mr-4 sm:mr-9 md:mr-10 2xl:mr-10">
                        <a href="https://www.instagram.com/rumbel_covenant22/" class="hover:transform hover:-translate-y-1 transition-transform duration-700">
                            <svg class="h-6 w-6 sm:h-7 sm:w-7 lg:w-8 lg:h-8 xl:w-11 xl:h-11 2xl:h-10 2xl:w-10" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path d="M14.829 6.302c-.738-.034-.96-.04-2.829-.04s-2.09.007-2.828.04c-1.899.087-2.783.986-2.87 2.87-.033.738-.041.959-.041 2.828s.008 2.09.041 2.829c.087 1.879.967 2.783 2.87 2.87.737.033.959.041 2.828.041 1.87 0 2.091-.007 2.829-.041 1.899-.086 2.782-.988 2.87-2.87.033-.738.04-.96.04-2.829s-.007-2.09-.04-2.828c-.088-1.883-.973-2.783-2.87-2.87zm-2.829 9.293c-1.985 0-3.595-1.609-3.595-3.595 0-1.985 1.61-3.594 3.595-3.594s3.595 1.609 3.595 3.594c0 1.985-1.61 3.595-3.595 3.595zm3.737-6.491c-.464 0-.84-.376-.84-.84 0-.464.376-.84.84-.84.464 0 .84.376.84.84 0 .463-.376.84-.84.84zm-1.404 2.896c0 1.289-1.045 2.333-2.333 2.333s-2.333-1.044-2.333-2.333c0-1.289 1.045-2.333 2.333-2.333s2.333 1.044 2.333 2.333zm-2.333-12c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm6.958 14.886c-.115 2.545-1.532 3.955-4.071 4.072-.747.034-.986.042-2.887.042s-2.139-.008-2.886-.042c-2.544-.117-3.955-1.529-4.072-4.072-.034-.746-.042-.985-.042-2.886 0-1.901.008-2.139.042-2.886.117-2.544 1.529-3.955 4.072-4.071.747-.035.985-.043 2.886-.043s2.14.008 2.887.043c2.545.117 3.957 1.532 4.071 4.071.034.747.042.985.042 2.886 0 1.901-.008 2.14-.042 2.886z"/>
                            </svg>
                        </a>
                        <a href="https://www.tiktok.com/@ypcio2" class="hover:transform hover:-translate-y-1 transition-transform duration-700">
                            <svg class="h-6 w-6 sm:h-7 sm:w-7 lg:w-8 lg:h-8 xl:w-11 xl:h-11 2xl:h-10 2xl:w-10" version="1.0" xmlns="http://www.w3.org/2000/svg"
                            width="512.000000pt" height="512.000000pt" viewBox="0 0 512.000000 512.000000"
                            preserveAspectRatio="xMidYMid meet">
                           
                           <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)"
                           fill="#000000" stroke="none">
                           <path d="M2325 5109 c-502 -51 -966 -238 -1358 -546 -107 -83 -362 -344 -444
                           -453 -268 -359 -437 -765 -499 -1205 -26 -180 -26 -510 0 -690 62 -438 233
                           -850 499 -1204 93 -123 285 -321 412 -426 777 -639 1859 -765 2754 -319 280
                           139 449 261 676 489 218 218 343 388 476 647 239 470 327 1010 249 1536 -61
                           418 -231 820 -491 1169 -94 125 -366 397 -490 490 -352 263 -748 430 -1172
                           494 -153 23 -473 33 -612 18z m774 -1262 c32 -182 118 -345 229 -432 88 -69
                           260 -135 350 -135 l32 0 0 -220 0 -220 -62 0 c-141 0 -266 35 -438 122 -63 32
                           -114 58 -115 58 0 0 1 -118 3 -262 4 -391 -12 -742 -38 -848 -67 -265 -248
                           -493 -487 -614 -105 -53 -217 -78 -348 -79 -145 -1 -221 16 -350 78 -260 126
                           -431 388 -464 711 -18 179 18 349 105 499 57 97 201 244 290 297 124 72 280
                           120 447 136 l87 8 0 -228 0 -228 -27 -6 c-86 -18 -215 -59 -263 -82 -72 -35
                           -145 -108 -178 -180 -24 -50 -27 -69 -27 -157 0 -91 3 -105 30 -160 42 -83
                           119 -158 202 -198 63 -30 75 -32 173 -32 130 0 185 21 258 99 60 63 86 112
                           115 214 22 76 22 84 24 987 1 501 2 916 2 923 1 9 52 12 220 12 l219 0 11 -63z"/>
                           </g>
                           </svg>
                        </a>
                        <a href="https://www.facebook.com/p/Panti-Asuhan-Rumah-Belajar-Covenant-100078999650380/" 
                        class="hover:transform hover:-translate-y-1 transition-transform duration-700">
                        <svg class="h-6 w-6 sm:h-7 sm:w-7 lg:w-8 lg:h-8 xl:w-11 xl:h-11 2xl:h-10 2xl:w-10" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm3 8h-1.35c-.538 0-.65.221-.65.778v1.222h2l-.209 2h-1.791v7h-3v-7h-2v-2h2v-2.308c0-1.769.931-2.692 3.029-2.692h1.971v3z"/>
                        </svg>    
                        </a>
                        <a href="https://www.youtube.com/@rumahbelajarcovenant8013" class="hover:transform hover:-translate-y-1 transition-transform duration-700">
                            <svg class="h-6 w-6 sm:h-7 sm:w-7 lg:w-8 lg:h-8 xl:w-11 xl:h-11 2xl:h-10 2xl:w-10" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm4.441 16.892c-2.102.144-6.784.144-8.883 0-2.276-.156-2.541-1.27-2.558-4.892.017-3.629.285-4.736 2.558-4.892 2.099-.144 6.782-.144 8.883 0 2.277.156 2.541 1.27 2.559 4.892-.018 3.629-.285 4.736-2.559 4.892zm-6.441-7.234l4.917 2.338-4.917 2.346v-4.684z"/>
                            </svg>    
                        </a>
                </div>
        
        </footer>    
    </div>
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
