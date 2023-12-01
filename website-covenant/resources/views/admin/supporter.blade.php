<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Kanit:wght@400&display=swap">
    <title>Admin List Supporter</title>
</head>
<style>
    /* Mengdesign si itu, si... si photo pencet trus muncul di tengah lho */
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
</head>

<body>
    @extends('layouts.navigation')
    @section('content')
    <div class="p-4 sm:ml-64">
        <div class="p-4">
            <div class="popup-overlay" id="popupOverlay">
                <img src="{{ asset('storage/fotobukti/$student->photo') }}" class="popup-image" id="popupImage" alt="Popup Image">
            </div>

            <!-- ini baru isi tabel, judul, main websitenya lho -->
            <div class="container">
                <h1 class="mb-4 text-4xl text-center font-extrabold leading-none tracking-tight text-gray-900 md:text-3xl lg:text-4xl dark:text-white">List Supporter</h1>
                <div class="flex my-5">
                    <div class="flex items-center justify-center px-3 h-8 me-3 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                        <svg class="w-3.5 h-3.5 me-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5H1m0 0 4 4M1 5l4-4" />
                        </svg>
                        <button onclick="prevPage()">Previous</button>
                    </div>
                    <div class="flex items-center justify-center px-3 h-8 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                        <button onclick="nextPage()">Next</button>
                        <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </div>
                </div>
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-sm uppercase bg-utama text-black">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Nama
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Waktu
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Email
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Alamat
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    No. Telp
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Donasi
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Pesan
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($supporters as $supporter)
                            <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $supporter->nama }}
                                </th>
                                <td class="px-6 py-4">
                                    {{ $supporter->tanggal }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $supporter->email }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $supporter->alamat }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $supporter->no_telepon }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $supporter->donasi }}
                                </td>
                                <td class="px-6 py-4">
                                    <div class="pesan-photo">
                                        <div class="pesan-cell">
                                            {{ $supporter->pesan }}
                                        </div>
                                        <div class="photo-cell">
                                            <img src="{{ asset('storage/fotobukti/fotobukti_' . $supporter->id . '.jpg') }}" alt="Photo" class="popup-trigger">
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- ini si pop up image nya yeah -->

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


        //                          //
        // fungsi button kiri kanan //
        //                          //

        let currentPage = 1; // Initialize current page
        const rowsPerPage = 10; // Change rows per page to 11

        // Function to show rows based on page
        function showPage(page) {
            const tableRows = document.querySelectorAll('#supporterTable tr');

            tableRows.forEach((row, index) => {
                if (index === 0 || (index >= ((page - 1) * rowsPerPage) + 1 && index <= page * rowsPerPage)) {
                    row.style.display = 'table-row';
                } else {
                    row.style.display = 'none';
                }
            });
        }

        // Function to show the previous page
        function prevPage() {
            if (currentPage > 1) {
                currentPage--;
                showPage(currentPage);
            }
        }

        // Function to show the next page
        function nextPage() {
            const tableRows = document.querySelectorAll('#supporterTable tr');
            const totalRows = tableRows.length - 1; // Exclude header row

            const totalPages = Math.ceil(totalRows / rowsPerPage);

            if (currentPage < totalPages) {
                currentPage++;
                showPage(currentPage);
            }
        }

        // Show the initial page
        showPage(currentPage);
    </script>
    @endsection
</body>

</html>