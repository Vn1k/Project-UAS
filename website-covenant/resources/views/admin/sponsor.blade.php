<!DOCTYPE html>
<html lang="en">

<head>
    @vite(['resources/css/app.css','resources/js/app.js'])
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/fontawesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" />
    <title>Sponsor</title>
</head>

<body>
    @extends('layouts.navigation')
    @section('content')
    @if($errors)
    <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
    @endif
    <div class="titleSPONSOR card-header">Upload Data Sponsor</div>
    <form action="/admin/sponsor" method="post" enctype="multipart/form-data">
        <a class="cardSPONS block m-10 p-10 bg-white border border-gray-500 rounded-xl shadow-xl">
            @csrf
            <div class="mb-6">
                <input type="text" name="instansi" placeholder="Instansi"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    required>
            </div>
            <div class="mb-6">
                <input type="text" name="penanggung_jawab" placeholder="Penanggung Jawab"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    required>
            </div>
            <div class="btnSUBMITspons">
                <button type="submit" class="btnSUBMITspons text-black justify-center items-center align-middle bg-yellow-200 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
            </div>
        </a>
    </form>

    <div class="tableSPONS overflow-x-auto shadow-md sm:rounded-lg">
        <table class="tabsSPONS w-100 text-sm text-center text-gray-900 bg-yellow-200 border border-grey-800 shadow-xl">
            <thead class="w-100 text-lg text-gray-700 uppercase bg-yellow-200 dark:bg-gray-700 dark:text-gray-400 rounded-xl shadow-2xl">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        No.
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Instansi
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Penanggung Jawab
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>

            <tbody class="contSPONS divide-y text-center divide-gray-200 dark:divide-gray-700 rounded-2xl">
                @foreach($sponsors as $index => $sponsor)
                <tr class="colSPONS bg-white dark:bg-gray-800 rounded-3xl">
                    <td class="px-6 py-4 whitespace-nowrap">
                        {{$index + 1}}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        {{$sponsor->instansi}}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        {{$sponsor->penanggung_jawab}}
                    </td>
                    <td class="imgEDIT px-6 py-4 whitespace-nowrap flex">
                        <a href="/admin/sponsor/{{$sponsor->id}}/edit"
                            class="text-blue-600 dark:text-blue-500 hover:underline">
                            <img src="{{ asset('storage/aset/editing.png') }}" style="height: 25px; width: 25px;">
                        </a>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <form action="/admin/sponsor/{{$sponsor->id}}" method="post">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="imgDEL text-red-600 dark:text-red-500 hover:underline">
                                <img src="{{ asset('storage/aset/bin.png') }}" style="height: 25px; width: 25px;">
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
            </thead>
        </table>
    </div>
    @endsection
</body>

</html>