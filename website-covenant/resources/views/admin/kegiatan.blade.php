<!DOCTYPE html>
<html lang="en">

<head>
    @vite(['resources/css/app.css','resources/js/app.js'])
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/fontawesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" />
    <title>Kegiatan</title>
</head>

<body>
    @extends('layouts.navigation')

    @section('content')
    <div class="p-4 sm:ml-64">
        <div class="p-4">
            <div class="mb-4 text-4xl text-center font-extrabold leading-none tracking-tight text-gray-900 md:text-3xl lg:text-4xl dark:text-white">Upload Data Kegiatan</div>

            <form action="/kegiatan" method="post" enctype="multipart/form-data" class="max-w-md mx-auto my-10">
                @csrf
                <div class="relative z-0 w-full mb-5 group">
                    <input type="text" id="nama_kegiatan" name="nama_kegiatan" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-third peer" placeholder=" " required />
                    <label for="nama" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-hover peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nama Kegiatan</label>
                </div>
                <div class="grid md:grid-cols-3 md:gap-6">
                    <div class="relative z-0 w-full mb-5 group">
                        <input type="date" id="jadwal" name="jadwal" aria-describedby="user_avatar_help" id="user_avatar" required class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                    </div>
                    <div class="relative z-0 w-full mb-5 group">
                        <input type="time" id="waktu" name="waktu" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                    </div>
                    <div class="relative z-0 w-full mb-5 group">
                        <input type="text" id="penyelenggara" name="penyelenggara" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                        <label class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Penyelenggara</label>
                    </div>
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <input type="text" id="lokasi" name="lokasi" aria-describedby="user_avatar_help" id="user_avatar" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-third peer" placeholder=" " required />
                    <label class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-hover peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Lokasi</label>
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <input type="text" id="deskripsi" name="deskripsi" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-third peer" placeholder=" " required />
                    <label class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-hover peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Deskripsi</label>
                </div>
                <div class="grid md:grid-cols-2 md:gap-6">
                    <div class="relative z-0 w-full mb-5 group">
                        <label for="underline_select" class="sr-only">Underline select</label>
                        <select id="volunteer" name="volunteer_id" class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                            <option selected>Sukarelawan</option>
                            @foreach ($volunteers as $volunteer)
                            <option value='{{$volunteer->id}}'>{{$volunteer->nama}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="relative z-0 w-full mb-5 group">
                        <label for="underline_select" class="sr-only">Underline select</label>
                        <select id="underline_select" class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                            <option selected>Sponsor - Penanggung Jawab</option>
                            @foreach ($sponsors as $sponsor)
                            <option value='{{$sponsor->id}}'>{{$sponsor->instansi}} - {{$sponsor->penanggung_jawab}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <button type="submit" class="text-black bg-third hover:bg-hover focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-fullpx-5 py-2.5 text-center  dark:bg-third dark:hover:bg-utama dark:focus:ring-blue-800 mt-5">Submit</button>
            </form>

            <div class="tableKegiatan overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right text-blue-100 dark:text-blue-100">
                    <thead class="text-xs text-black uppercase bg-yellow-100 dark:text-white">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                No.
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Nama Kegiatan
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Tanggal
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Waktu
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Penyelenggara
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Lokasi
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Deskripsi
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Sukarelawan
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Sponsor - Penanggung Jawab
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Cover
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Foto 1
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Foto 2
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Foto 3
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($kegiatans as $index => $event)
                        <tr>
                            <td class="px-6 py-4">
                                {{ $index + 1}}
                            </td>
                            <td class="px-6 py-4">
                                {{ $event->nama_kegiatan }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $event->jadwal }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $event->waktu }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $event->penyelenggara }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $event->lokasi }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $event->deskripsi }}
                            </td>
                            <td class="px-6 py-4">
                                @foreach($event->volunteers as $one_volunteer)
                                {{ $one_volunteer->nama }}
                                <br />
                                @endforeach
                            </td>
                            <td class="px-6 py-4">
                                @foreach($event->sponsors as $one_sponsor)
                                {{ $one_sponsor->instansi }} - {{$one_sponsor->penanggung_jawab}}
                                <br />
                                @endforeach
                            </td>
                            <td class="px-6 py-4">
                                <img src="{{asset('storage/' . $event->cover)}}" style="width: 300px" />
                            </td>
                            <td class="px-6 py-4">
                                <img src="{{asset('storage/' . $event->photo)}}" style="width: 300px" />
                            </td>
                            <td class="px-6 py-4">
                                <img src="{{asset('storage/' . $event->photo2)}}" style="width: 300px" />
                            </td>
                            <td class="px-6 py-4">
                                <img src="{{asset('storage/' . $event->photo3)}}" style="width: 300px" />
                            </td>

                            <td class="px-6 py-4">
                                <a href="/kegiatan/{{ $event->id }}/edit" class="font-medium text-white hover:underline">edit</a> |
                            
                                <form action="/kegiatan/{{ $event->id }}" method="post">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="imgDEL text-red-600 dark:text-red-500 hover:underline">
                                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                                            <path d="M17 4h-4V2a2 2 0 0 0-2-2H7a2 2 0 0 0-2 2v2H1a1 1 0 0 0 0 2h1v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V6h1a1 1 0 1 0 0-2ZM7 2h4v2H7V2Zm1 14a1 1 0 1 1-2 0V8a1 1 0 0 1 2 0v8Zm4 0a1 1 0 0 1-2 0V8a1 1 0 0 1 2 0v8Z" />
                                        </svg>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @endsection

</body>

</html>