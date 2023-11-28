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
    <div class="containerKegiatan">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="titleKegiatan card-header"><h2>UPLOAD DATA KEGIATAN</h2></div>
                    <!-- <div class="card-body">
                    <p>You are in Kegiatan Page</p>
                </div> -->
                </div>
                <!-- <a href="/kegiatans/create">Create new kegiatan</a> -->
                <!-- Blade Template for Kegiatan -->
                <!-- <h1>Kegiatan</h1> -->
                <form action="/admin/kegiatan" method="post" enctype="multipart/form-data">
                <a class="cardKEGIATAN block m-10 p-10 bg-white border border-gray-500 rounded-xl shadow-xl">
                    @csrf 
                    <div class="mb-6">
                        <input type="text" id="nama_kegiatan" name="nama_kegiatan" placeholder="Nama Kegiatan"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                    </div>
                    <div class="contPA flex">
                        <div class="jadwalKEG mb-6">
                            <input type="date" id="jadwal" name="jadwal" class="dateKEG block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="user_avatar" required>
                        </div>
                        <div class="photoVOL mb-6">
                            <input type="time" id="waktu" name="waktu" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                        </div>
                        <div class="asalVOL mb-6">
                            <input type="text" id="penyelenggara" name="penyelenggara" placeholder="Penyelenggara" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                        </div>
                    </div>
                    <div class="contPA flex">
                        <div class="photoVOL mb-6">
                            <input type="text" id="lokasi" name="lokasi" placeholder="Lokasi" class="lokasiKEG block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="user_avatar" required>
                        </div>
                        <div class="asalVOL mb-6">
                            <input type="text" id="deskripsi" name="deskripsi" placeholder="Deskripsi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                        </div>
                    </div>
                    <div class="contPA flex">
                        <label for="volunteer" class="labelVOL block mb-4 text-sm font-medium text-gray-900 dark:text-white">Volunteer</label>
                        <label for="sponsor" class="mr-10 mb-3 block text-sm font-medium text-gray-900 dark:text-white">Sponsor - Penanggung Jawab</label>
                    </div>
                    <div class="contPA flex">
                        <select id="volunteer" name="volunteer_id" class="mr-10 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            @foreach ($volunteers as $volunteer)
                            <option value='{{$volunteer->id}}'>{{$volunteer->nama}}</option>
                            @endforeach
                        </select>

                        <br />

                        
                        <select id="sponsor" name="sponsor_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            @foreach ($sponsors as $sponsor)
                            <option value='{{$sponsor->id}}'>{{$sponsor->instansi}} - {{$sponsor->penanggung_jawab}}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btnSUBMITkegiatan text-black justify-center items-center align-middle bg-yellow-200 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                </a>
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
                            <tr class="bg-blue-500 border-b border-blue-400">
                                <td class="px-6 py-4">
                                    {{ $index + 1}}
                                </td>
                                <td class="px-6 py-4 font-medium text-blue-50 whitespace-nowrap dark:text-blue-100">
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
                                    <a href="/admin/kegiatan/{{ $event->id }}/edit" class="font-medium text-white hover:underline">EDIT</a> |
                                    <form action="/admin/kegiatan/{{ $event->id }}" method="post">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit">DELETE</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @endsection

</body>

</html>