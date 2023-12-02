@vite(['resources/css/app.css','resources/js/app.js'])
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submission Successful</title>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Kanit', sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 100vw;
            margin: 0 auto;
        }
        .confirmed-donation {
            text-align: center;
            background-color: #C4FFB6; /* Green Background Color */
            color: #006400; /* Darker Green Font Color */
            border-radius: 10px; /* Border Radius */
            padding: 5px 20px;
            width: 40rem;
            margin: 0 auto;
        }

        .kuitansi-container {
            border: 0.1rem solid;
            width: 35rem;
            margin-top: 2rem;
            margin-left: auto;
            margin-right: auto;
        }

        .kuitansi-container p {
            padding: 0 2rem;
            overflow: hidden; /* Clear floats */
            margin: 0; /* Remove default margins */
        }

        .kuitansi-container .label {
            float: left; /* Align label to the left */
        }

        .kuitansi-container .content {
            float: right; /* Align content to the right */
        }

        hr {
            border: none;
            border-top: 1px dotted #060606;
            color: #060606;
            height: 1px;
            width: 90%;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            margin: 10px;
            background-color: #C4FFB6; /* Green Background Color */
            color: #006400; /* Darker Green Font Color */
            border: none;
            border-radius: 5px;
            text-decoration: none;
        }

        .btn:hover {
            background-color: #228B22; /* Darker Green on Hover */
            color: #fff; /* White Font on Hover */
        }

        /* Media Queries for Tablet and Mobile */
        @media screen and (max-width: 768px) {
            .container {
                width: 90vw;
                margin: 1em auto;
            }
            .confirmed-donation {
                width: 90vw;
            }
            .kuitansi-container {
                width: 90vw;
            }
            .kuitansi-container p {
                padding: 0 1rem; /* Adjust padding */
            }
            .kuitansi-container .label {
                float: none;
                display: block; /* Reset label to display as block */
                font-weight: bold;
                text-align: left; /* Align label to left */
            }
            .kuitansi-container .content {
                float: none;
                display: block; /* Reset content to display as block */
                text-align: right; /* Align content to right */
            }
        }
    </style>
</head>

<body>
    @extends('layouts.appUser')
    @section('content')
    <div class="container">
        <center><h1 style="font-family: 'Kanit', sans-serif;">DUKUNGAN</h1></center>
        <div class="confirmed-donation">
            <p style="font-family: 'Kanit', sans-serif;">{{$supporter->nama}}, donasi kamu sudah berhasil di proses!</p>
            <p>Terima kasih atas donasi yang telah diberikan!</p>
        </div>
        
        <div class="kuitansi-container">
            <center><h2 style="font-family: 'Kanit', sans-serif;">KUITANSI</h2></center>
            <p>
                <span class="label">Waktu:</span>
                <span class="content">{{ $supporter->tanggal }}</span>
            </p> 
            <hr>
            <p>
                <span class="label">Nama:</span>
                <span class="content">{{ $supporter->nama }}</span>
            </p> 
            <hr>
            <p>
                <span class="label">Email:</span>
                <span class="content">{{ $supporter->email }}</span>
            </p> 
            <hr>
            <p>
                <span class="label">Alamat:</span>
                <span class="content">{{ $supporter->alamat }}</span>
            </p>
            <hr>
            <p>
                <span class="label">No. Telp:</span>
                <span class="content">{{ $supporter->no_telepon }}</span>
            </p>
            <hr>
            <p>
                <span class="label">Jenis Donasi:</span>
                <span class="content">{{ $supporter->donasi }}</span>
            </p>
            <hr>
        </div>
        <br>
        <center><a href="{{ route('generate-pdf', ['id' => $supporter->id]) }}" class="btn">Buat Kuitansi</a></center>
        
    </div>
    @endsection
</body>
</html>
