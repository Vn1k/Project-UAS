<!DOCTYPE html>
<html lang="en">

<head>
    @vite(['resources/css/app.css','resources/js/app.js'])
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/fontawesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" />
    <title>Volunteer</title>
</head>
<style>
    .photo-cell img {
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
        height: 80vh;
        width: auto;
        display: none;
        max-width: 80%;
        max-height: 80%;
        border-radius: 5px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
        opacity: 0;
        transition: opacity 0.5s ease-in-out, transform 0.5s ease-in-out; /* Modified transition */
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
            @if($errors)
            <ul>
                @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
            @endif

            <!-- For PopUp Images -->
            <div class="popup-overlay" id="popupOverlay">
                <img class="popup-image" id="popupImage" alt="Popup Image">
            </div>
            <!-- ---------------- -->

            <div class="mb-4 text-4xl text-center font-extrabold leading-none tracking-tight text-gray-900 md:text-3xl lg:text-4xl dark:text-white">Upload Data Volunteers</div>

            <form action="{{ route('admin.volunteer.store') }}" method="post" enctype="multipart/form-data" class="max-w-md mx-auto my-10">
                @csrf
                <div class="relative z-0 w-full mb-5 group">
                    <input type="text" name="nama" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-third peer" placeholder=" " required />
                    <label for="nama" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-hover peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nama</label>
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <input type="text" name="asal" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-third peer" placeholder=" " required />
                    <label for="asal" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-hover peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Asal Kota</label>
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <input type="text" name="no_telepon" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-third peer" placeholder=" " required />
                    <label for="no_telepon" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-hover peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">No. Telepon</label>
                </div>
                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Upload file</label>
                    <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 my-2.5" type="file" name="photo" placeholder="Upload Foto" aria-describedby="user_avatar_help" id="user_avatar" required>
                    <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">JPEG, PNG, JPG (MAX. 10MB).</p>
                </div>

                <button type="submit" class="text-black bg-third hover:bg-hover focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-fullpx-5 py-2.5 text-center  dark:bg-third dark:hover:bg-utama dark:focus:ring-blue-800 mt-5">Submit</button>
            </form>

            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-utama dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                No
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Nama
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Asal
                            </th>
                            <th scope="col" class="px-6 py-3">
                                No. Telp
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Foto
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($volunteers as $volunteer)
                        <tr>
                            <td class="px-6 py-4">
                                {{ $volunteer->id }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $volunteer->nama }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $volunteer->asal }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $volunteer->no_telepon }}
                            </td>
                            <td class="photo-cell px-6 py-4">
                                <img src="{{ asset('storage/' . $volunteer->photo) }}" alt="Photo" class="popup-trigger w-10 justify-center">

                            </td>
                            <td class="px-8 py-4 whitespace-nowrap flex gap-6">
                                <a href="{{ route('admin.volunteer.show', ['volunteer' => $volunteer->id]) }}" class="text-blue-600 dark:text-blue-500 hover:underline">
                                    <Span>Edit</Span>
                                </a>
                                <form action="{{ route('admin.volunteer.destroy', ['volunteer' => $volunteer->id]) }}" method="post">
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