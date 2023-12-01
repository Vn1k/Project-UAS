<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>

<body>
    @extends('layouts.navigation')
    @section('content')
    <div class="p-4 sm:ml-64">
        <div class="p-4">
            <div class="mb-5 text-4xl text-center font-extrabold leading-none tracking-tight text-gray-900 md:text-3xl lg:text-4xl dark:text-white">Welcome</div>
            <div class="grid md:grid-cols-5 md:gap-5 font-medium font-kanit">
                <a class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <div class="flex flex-col items-center justify-center">
                        <dt class="mb-2 text-3xl font-extrabold">{{ $countspon }}</dt>
                        <dd class="text-gray-500 dark:text-gray-400">Sponsor</dd>
                    </div>
                </a>
                <a class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <div class="flex flex-col items-center justify-center">
                        <dt class="mb-2 text-3xl font-extrabold">{{$countvoult}}</dt>
                        <dd class="text-gray-500 dark:text-gray-400">Volunteer</dd>
                    </div>
                </a>
                <a class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <div class="flex flex-col items-center justify-center">
                        <dt class="mb-2 text-3xl font-extrabold">{{$countkegiatan}}</dt>
                        <dd class="text-gray-500 dark:text-gray-400">Kegiatan</dd>
                    </div>
                </a>
                <a class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <div class="flex flex-col items-center justify-center">
                        <dt class="mb-2 text-3xl font-extrabold">{{$countgaleri}}</dt>
                        <dd class="text-gray-500 dark:text-gray-400">Galleri</dd>
                    </div>
                </a>
                <a class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <div class="flex flex-col items-center justify-center">
                        <dt class="mb-2 text-3xl font-extrabold">{{$countsupp}}</dt>
                        <dd class="text-gray-500 dark:text-gray-400">Supporter</dd>
                    </div>
                </a>
            </div>
        </div>
    </div>
    @endsection
</body>

</html>