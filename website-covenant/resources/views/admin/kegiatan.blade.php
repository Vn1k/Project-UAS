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
<style>
    
    .photo-cell img{
        cursor: pointer;
    }
    .popup-overlay {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.8);
        justify-content: center;
        align-items: center;
        z-index: 9999;
        opacity: 0;
        transition: opacity 0.5s ease-in-out; /* Modified transition */
    }

    .popup-image {
        height: auto;
        width: auto;
        display: none;
        max-width: 80%;
        max-height: 80%;
        border-radius: 5px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
        opacity: 0;
        transition: opacity 0.5s ease-in-out, transform 0.5s ease-in-out;
        transform: scale(0.8);
    }

    .popup-overlay.active, .popup-image.active {
        display: flex;
        opacity: 1;
    }
</style>
<body>
    @extends('layouts.navigation')

    @section('content')
    <div class="p-4 sm:ml-64">
        <div class="p-4">
            <!-- For PopUp Images -->
            <div class="popup-overlay" id="popupOverlay">
                <img class="popup-image" id="popupImage" alt="Popup Image">
            </div>
            <!-- ---------------- -->
            <div class="mb-4 text-4xl text-center font-extrabold leading-none tracking-tight text-gray-900 md:text-3xl lg:text-4xl dark:text-white">Upload Data Kegiatan</div>

            <form action="{{ route('admin.kegiatan.store') }}" method="post" enctype="multipart/form-data" class="max-w-md mx-auto my-10">
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
                        <label for="sponsor_id" class="sr-only">Sponsor select</label>
                        <select id="sponsor_id" name="sponsor_id" class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
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
                        <tr class="text-black">
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
                            <td class="photo-cell px-6 py-4">
                                <img src="{{asset('storage/' . $event->cover)}}" style="width: 50px" />
                            </td>
                            <td class="photo-cell px-6 py-4">
                                <img src="{{asset('storage/' . $event->photo)}}" style="width: 50px" />
                            </td>
                            <td class="photo-cell px-6 py-4">
                                <img src="{{asset('storage/' . $event->photo2)}}" style="width: 50px" />
                            </td>
                            <td class="photo-cell px-6 py-4">
                                <img src="{{asset('storage/' . $event->photo3)}}" style="width: 50px" />
                            </td>

                            <td class="px-6 py-4">
                                <a href="{{ route('admin.kegiatan.show', ['kegiatan' => $event->id]) }}"class="text-blue-600 dark:text-blue-500 hover:underline">Edit</a>

                                <form action="{{ route('admin.kegiatan.destroy', ['kegiatan' => $event->id]) }}" method="post">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="text-red-600 dark:text-red-500 hover:underline">
                                        <span>Hapus</span>
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

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const photoCells = document.querySelectorAll('.photo-cell');

            photoCells.forEach(cell => {
                const image = cell.querySelector('img');

                image.addEventListener('click', function(event) {
                    event.preventDefault();
                    const imageUrl = this.src; // Get the clicked image URL
                    showPopup(imageUrl);
                });
            });

            function showPopup(imageUrl) {
                const popupOverlay = document.getElementById('popupOverlay');
                const popupImage = document.getElementById('popupImage');

                popupImage.src = imageUrl;
                popupOverlay.classList.add('active');
                popupImage.classList.add('active');

                popupOverlay.addEventListener('click', closePopup);
            }

            function closePopup() {
                const popupOverlay = document.getElementById('popupOverlay');
                const popupImage = document.getElementById('popupImage');

                popupOverlay.classList.remove('active');
                popupImage.classList.remove('active');

                popupOverlay.removeEventListener('click', closePopup);
            }
        });
    </script>

</body>

</html>