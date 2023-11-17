<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin List Supporter</title>
</head>
<style>
    body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

    .container {
        width: 80vw;
        margin: 50px auto;
        background-color: white;
        padding: 30px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    #tableHeader{
        text-align: center;
        
    }

    table {
        width: 100%;
        border-collapse: collapse;
        font-size: medium;
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

    #tableHeader {
        font-size: large;
        color: #333;
        border: 2px solid black;
        border-radius: 2em / 5em;
    }
    
    td.pesan-photo{
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    /* td.photo-cell{
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
    }

    .popup-image {
        display: none;
        max-width: 80%;
        max-height: 80%;
        border-radius: 5px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
    }

    .popup-overlay.active,.popup-image.active {
        display: flex;
    }



</style>
<body>

    <!-- ini si pop up image nya yeah -->
    <div class="popup-overlay" id="popupOverlay">
        <img src="" class="popup-image" id="popupImage" alt="Popup Image">
    </div>
    
    
    <!-- ini baru isi tabel, judul, main websitenya lho -->
    <div class="container">
        <h1 class="title">List Supporter</h1>
        
        <table>
            <tr id="tableHeader">
                <th>No.</th>
                <th>Nama</th>
                <th>Waktu</th>
                <th>Email</th>
                <th>Alamat</th>
                <th>No.Telp</th>
                <th>Donasi</th>
                <th>Pesan</th>
            </tr>

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
                        {{$supporter->pesan}}
                    </div>
                    <div class="photo-cell">
                        {{$supporter->photo}} <img src="" alt="Photo">
                    </div>
                </td>
            </tr>
            @endforeach

        </table>

    </div>

    <script>
        // fungsi untuk mengambil gambar dari database dan menampilkannya di popup
        const photoLinks = document.querySelectorAll('.photo-cell a');

        photoLinks.forEach(link => {
            link.addEventListener('click', function(event) {
                event.preventDefault();
                const imageUrl = this.previousSibling.textContent.trim(); // Assuming the image URL is in the text content before the <a> tag
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
    </script>
</body>
</html>