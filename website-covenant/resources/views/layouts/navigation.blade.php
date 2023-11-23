<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Admin</title>
</head>

<body>
    <nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
        <!-- Primary Navigation Menu -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <!-- dashboard -->
                <div class="hidden sm:flex sm:items-center sm:ms-6">
                     @auth
                    <div>
                        <a href="{{ route('admin.dashboard') }}">{{ Auth::user()->name }}</a>
                    </div>
                    @endauth
                </div>
                <!-- volunter -->
                <div class="hidden sm:flex sm:items-center sm:ms-6">
                    <a href="{{ route('admin.volunteer.index') }}" class="text-gray-500 hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">Volunteer</a>
                </div>

                <!-- sponsor -->
                <div class="hidden sm:flex sm:items-center sm:ms-6">
                    <a href="{{ route('admin.sponsor.index') }}" class="text-gray-500 hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">Sponsor</a>
                </div>

                <!-- galleri  -->
                <div class="hidden sm:flex sm:items-center sm:ms-6">
                    <a href="{{ route('galleri.index') }}" class="text-gray-500 hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">Galleri</a>
                </div>
                
                <!-- logout -->
                <form method="POST" action="{{ route('admin.logout') }}" class="hidden sm:flex sm:items-center sm:ms-6">
                    @csrf
                    <x-dropdown-link :href="route('admin.logout')" onclick="event.preventDefault();
                                    this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-dropdown-link>
                </form>
                <!-- Hamburger -->
                <div class="-me-2 flex items-center sm:hidden">
                    <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Responsive Navigation Menu -->
        <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">


            <!-- Responsive Settings Options -->
            <div class="pt-4 pb-1 border-t border-gray-200">
                <div class="px-4">
                    <a href="{{ route('admin.dashboard') }}">{{ Auth::user()->name }}</a>
                </div>

                <div class="mt-3 space-y-1">
                    <!-- Authentication -->
                    <form method="POST" action="{{ route('admin.logout') }}">
                        @csrf
                        <x-responsive-nav-link :href="route('admin.logout')" onclick="event.preventDefault();
                                    this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-responsive-nav-link>
                    </form>
                </div>
            </div>
        </div>
    </nav>
    <main>
        @yield('content')
    </main>
</body>

</html>