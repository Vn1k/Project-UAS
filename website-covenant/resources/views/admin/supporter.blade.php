<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Kanit:wght@400&display=swap">
    <title>Admin List Supporter</title>
</head>
<style>
    body {
        font-family: 'Kanit', sans-serif;
        background-color: white;
    }

    .container {
        font-family: 'Kanit', sans-serif;
        max-width: 80vw; /* Set a maximum width for the container */
        margin: 50px auto;
        background-color: white;
        padding: 30px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        overflow-x: auto; /* Enable horizontal scrolling if needed */
        text-align: center;
    }

    table {
        width: 100%; /* Make the table width 100% to be responsive */
        border-collapse: collapse;
        font-size: medium;
        letter-spacing: 2px;
    }

    th, td {
        padding: 10px;
        text-align: center;
        border-bottom: 1px solid #ddd;
    }

    th {
        background-color: #faf096;
        color: #333;
        font-weight: bold;
        font-size: larger;
        
    }

    tr{
        background-color: white;
        border-radius: 2em / 5em;
    }

    tr:hover {
        transition: background-color 0.3s ease-in-out;
        background-color: #f3f3f3;
    }

    tr:not(hover){
        transition: background-color 0.2s ease-out;
        background-color: white;
    }

    .tableHeader {
        font-size: medium;
        color: #333;
        text-align: center;
        /* border: 2px solid black; */
        /* border-radius: 15px; */
        /* overflow: hidden; */
    }
    
    .pesan-photo {
        display: flex;
        align-items: center; /* Align items vertically */
    }

    .pesan-cell {
        flex-grow: 1; /* Fill remaining space */
        padding: 10px;
        text-align: center; /* Center-align text */
    }

    .photo-cell {
        text-align: right; /* Align photo to the right */
        padding: 10px;
    }

    .photo-cell img {
        width: 50px; /* Adjust as needed */
        height: auto;
        display: inline-block; /* Ensure image alignment */
        vertical-align: middle; /* Align image vertically */
        margin-left: 10px; /* Add margin to separate text and image */
    }

    .photo-cell:hover {
        cursor: pointer;
    }

    .rounded-left {
        border-top-left-radius: 15px; /* Rounded top left corner */
        border-bottom-left-radius: 15px; /* Rounded bottom left corner */
    }

    .rounded-right {
        border-top-right-radius: 15px; /* Rounded top right corner */
        border-bottom-right-radius: 15px; /* Rounded bottom right corner */
    }

    /* .photo-cell{
        text-align: right;
        width: 100px;
        overflow: hidden;
        white-space: nowrap;
    } */



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


    /*DESIGN BUTTON KIRI KANAN */
    button {
        padding: 10px 20px;
        margin: 5px;
        font-size: 16px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease-in-out, transform 0.1s ease-in-out;
    }

    button:hover {
        background-color: #fafafa; /* Change to your preferred hover color */
    }

    button:active {
        transform: scale(0.95);
        transition: transform 0.1s ease-in-out;
    }


</style>
<body>

    <!-- ini si pop up image nya yeah -->
    <div class="popup-overlay" id="popupOverlay">
        <img src="{{ asset('storage/fotobukti/$student->photo') }}" class="popup-image" id="popupImage" alt="Popup Image">
    </div>
    
    
    <!-- ini baru isi tabel, judul, main websitenya lho -->
    <div class="container">
        <h1 class="title">List Supporter</h1>
        
        <button onclick="prevPage()">Previous</button>
        <button onclick="nextPage()">Next</button>

        <!-- Your HTML structure -->
        <table id="supporterTable">
            <colgroup>
                <!-- Define individual column widths -->
                <col style="min-width: 40px;"> <!-- No -->
                <col style="min-width: 100px;"> <!-- Nama -->
                <col style="min-width: 80px;"> <!-- Waktu -->
                <col style="min-width: 150px;"> <!-- Email -->
                <col style="min-width: 120px;"> <!-- Alamat -->
                <col style="min-width: 100px;"> <!-- No.Telp -->
                <col style="min-width: 80px;"> <!-- Donasi -->
                <col style="min-width: 200px;"> <!-- Pesan -->
            </colgroup>
            <thead>
                <tr class="tableHeader">
                    <th class="rounded-left">No.</th>
                    <th>Nama</th>
                    <th>Waktu</th>
                    <th>Email</th>
                    <th>Alamat</th>
                    <th>No.Telp</th>
                    <th>Donasi</th>
                    <th class="rounded-right">Pesan</th>
                </tr>
            </thead>
            <tbody>
                <!-- Loop through your supporters data -->
                @php $incrementedNo = 1; @endphp
                @foreach($supporters as $supporter)
                <tr>
                    <td>{{$incrementedNo++}}</td>
                    <td>{{$supporter->nama}}</td>
                    <td>{{$supporter->tanggal}}</td>
                    <td>{{$supporter->email}}</td>
                    <td>{{$supporter->alamat}}</td>
                    <td>{{$supporter->no_telepon}}</td>
                    <td>{{$supporter->donasi}}</td>
                    <td>
                        <div class="pesan-photo">
                            <div class="pesan-cell">
                                {{$supporter->pesan}}
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
picture
    <!-- <script>
        document.addEventListener('DOMContentLoaded', function () {
        const photoCells = document.querySelectorAll('.photo-cell');

        photoCells.forEach(cell => {
            const image = cell.querySelector('img');

            image.addEventListener('click', function (event) {
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
    });

    </script> -->


    <script>
        //                                                                          //
        // fungsi untuk mengambil gambar dari database dan menampilkannya di popup  //
        // 
                                                                                 //
        // const photoLinks = document.querySelectorAll('.photo-cell img');

        // photoLinks.forEach(link => {
        //     link.addEventListener('click', function(event) {
        //         event.preventDefault();
        //         const imageUrl = this.previousSibling.textContent.trim(); // Assuming the image URL is in the text content before the <a> tag
        //         showPopup(imageUrl);
        //     });
        // });

        // function showPopup(imageUrl) {
        //     const popupOverlay = document.getElementById('popupOverlay');
        //     const popupImage = document.getElementById('popupImage');

        //     popupImage.src = imageUrl;
        //     popupOverlay.classList.add('active');
        //     popupImage.classList.add('active');

        //     popupOverlay.addEventListener('click', closePopup);
        // }

        // function closePopup() {
        //     const popupOverlay = document.getElementById('popupOverlay');
        //     const popupImage = document.getElementById('popupImage');

        //     popupOverlay.classList.remove('active');
        //     popupImage.classList.remove('active');

        //     popupOverlay.removeEventListener('click', closePopup);
        // }
        
        document.addEventListener('DOMContentLoaded', function () {
        const photoCells = document.querySelectorAll('.photo-cell');

        photoCells.forEach(cell => {
            const image = cell.querySelector('img');

            image.addEventListener('click', function (event) {
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
</body>
</html>