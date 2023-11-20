<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="icon" type="png" href="{{ asset('images/logo.png') }}">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app" class="flex flex-col">
        {{-- NAVBAR --}}
        @include('partials.navbar')
        
        {{-- CONTENT PER PAGE  --}}
        <main class="flex-1">
            @yield('content')
        </main>
        
        {{-- FOOTER --}}
        <footer class="bg-utama text-black font-Kanit mt-5 py-6 2xl:py-8">
            <div class="container mx-auto flex flex-wrap items-center justify-between">
                
                <!-- Logo Area -->
                <a class="flex ml-5 2xl:ml-36" href="/">
                    <img class="h-12 w-12 2xl:w-32 2xl:h-32" src="{{ asset('images/logo.png') }}" alt="Logo">
                </a>

                <!-- Konten Tengah -->
                <div class="text-left w-40 mx-3 flex-grow 2xl:mx-12 2xl:ml-20">
                    <h1 class="text-sm font-bold 2xl:text-2xl">Panti Asuhan Rumah Belajar Covenant</h1>
                    <div class="my-4 border w-28 rounded-sm border-black 2xl:w-72 2xl:border-2"></div>
                    <p class="text-xs 2xl:text-lg 2xl:my-4">
                        Ruko Kencana Bunda No. 88 CC RT/RW. 004, Jl. Kalindra II No. 009,
                        RT. 4/RW. 9, Cengkareng Barat, Kota Jakarta Barat, Daerah Khusus
                        IbuKota Jakarta 11730.
                    </p>
                    <div class="flex flex-grow mt-3 2xl:mt-">
                        <button class="text-black text-center mr-2 w-28 border border-black rounded-full hover:bg-black hover:text-utama hover:transform hover:-translate-y-1 transition-transform duration-700 text-xs font-bold
                                        2xl:w-60 2xl:text-xl">
                            HUBUNGI KAMI
                        </button>
                        <div class="border h-6 rounded-sm border-black 2xl:block 2xl:h-9 2xl:ml-3"></div>
                        <div class="text-center  ml-3 2xl:mt-1 2xl:ml-6 hover:bg-black hover:w-16 2xl:hover:w-20 2xl:hover:ml-3 hover:text-utama hover:transform hover:border hover:border-black hover:rounded-full hover:-translate-y-1 transition-transform duration-700">
                            <a class="font-bold text-sm 2xl:text-xl" href="">
                                ADMIN
                            </a>
                        </div>
                    </div>
                </div>
        
                <!-- Social Media -->
                <div class="flex-shrink-0 mr-4 md:mr-10">
                    <div class="flex flex-col space-y-3 text-right">
                        <a href="" class="hover:transform hover:-translate-y-1 transition-transform duration-700">
                            <img class="h-6 w-6 2xl:h-12 2xl:w-12" src="{{ asset('images/instagram.png') }}" alt="Logo">
                        </a>
                        <a href="#" class="hover:transform hover:-translate-y-1 transition-transform duration-700">
                            <img class="h-6 w-6 2xl:h-12 2xl:w-12" src="{{ asset('images/twitter.png') }}" alt="Logo">
                        </a>
                        <a href="https://www.facebook.com/p/Panti-Asuhan-Rumah-Belajar-Covenant-100078999650380/" class="hover:transform hover:-translate-y-1 transition-transform duration-700">
                            <img class="h-6 w-6 2xl:h-12 2xl:w-12" src="{{ asset('images/facebook.png') }}" alt="Logo">
                        </a>
                        <a href="#" class="hover:transform hover:-translate-y-1 transition-transform duration-700">
                            <img class="h-6 w-6 2xl:h-12 2xl:w-12" src="{{ asset('images/youtube.png') }}" alt="Logo">
                        </a>
                    </div>
                </div>
        
            </div>
        </footer>

        
    </div>
</body>
</html>