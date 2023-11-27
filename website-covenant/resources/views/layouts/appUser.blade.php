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
    <div id="app" class="min-h-screen flex flex-col">
        {{-- NAVBAR --}}
        @include('partials.navbar')
        
        {{-- CONTENT PER PAGE  --}}
        <main class="flex-1 mt-12">
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
                        <a href="https://wa.me/6282187227218" class="px-2 py-1 sm:px-20 xl:px-32 xl:py-2 text-black text-center border border-black rounded-full hover:bg-black hover:text-utama hover:transform hover:-translate-y-1 transition-transform duration-700
                        text-sm sm:text-base font-bold lg:text-lg xl:text-xl">
                            HUBUNGI KAMI
                        </a>
                        <div class="border xl:border-2 h-8 rounded-sm border-black 2xl:block 2xl:h-9"></div>
                        <div class="px-2 py-1 xl:py-2 xl:px-4 text-center hover:bg-black hover:text-utama hover:transform hover:border hover:border-black hover:rounded-full hover:-translate-y-1 transition-transform duration-700">
                            <a class="font-bold text-sm sm:text-base lg:text-lg xl:text-xl" href="">
                                ADMIN
                            </a>
                        </div>
                    </div>
                </div>
        
                <!-- Social Media -->
                <div class="flex flex-col gap-3 md:gap-4 text-right mr-4 sm:mr-9 md:mr-10 2xl:mr-10">
                        <a href="" class="hover:transform hover:-translate-y-1 transition-transform duration-700">
                            <img class="h-8 w-8 sm:h-9 sm:w-9 md:h-10 md:w-10 lg:w-11 lg:h-11 xl:w-11 xl:h-11 2xl:h-12 2xl:w-12" src="{{ asset('local_images/instagram.png') }}" alt="Logo">
                        </a>
                        <a href="#" class="hover:transform hover:-translate-y-1 transition-transform duration-700">
                            <img class="h-8 w-8 sm:h-9 sm:w-9 md:h-10 md:w-10 lg:w-11 lg:h-11 xl:w-11 xl:h-11 2xl:h-12 2xl:w-12" src="{{ asset('local_images/twitter.png') }}" alt="Logo">
                        </a>
                        <a href="https://www.facebook.com/p/Panti-Asuhan-Rumah-Belajar-Covenant-100078999650380/" 
                        class="hover:transform hover:-translate-y-1 transition-transform duration-700">
                            <img class="h-8 w-8 sm:h-9 sm:w-9 md:h-10 md:w-10 lg:w-11 lg:h-11 xl:w-11 xl:h-11 2xl:h-12 2xl:w-12" src="{{ asset('local_images/facebook.png') }}" alt="Logo">
                        </a>
                        <a href="#" class="hover:transform hover:-translate-y-1 transition-transform duration-700">
                            <img class="h-8 w-8 sm:h-9 sm:w-9 md:h-10 md:w-10 lg:w-11 lg:h-11 xl:w-11 xl:h-11 2xl:h-12 2xl:w-12" src="{{ asset('local_images/youtube.png') }}" alt="Logo">
                        </a>
                </div>
        
        </footer>    
    </div>
</body>
</html>
