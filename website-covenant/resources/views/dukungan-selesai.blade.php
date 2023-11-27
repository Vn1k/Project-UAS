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
            width: 70vw;
            margin: 0 auto;
        }
        .confirmed-donation {
            text-align: center;
            background-color: #32CD32; /* Green Background Color */
            color: #006400; /* Darker Green Font Color */
            border-radius: 10px; /* Border Radius */
            padding: 20px;
            width: 80vw;
            margin: 0 auto;
        }
        hr {
            border: none;
            border-top: 1px dotted #f00;
            color: #060606;
            height: 1px;
            width: 50%;
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            margin: 10px;
            background-color: #32CD32; /* Green Background Color */
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
            }
            .confirmed-donation {
                width: 90vw;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <center><h1 style="font-family: 'Kanit', sans-serif;">DUKUNGAN</h1></center>
        <div class="confirmed-donation">
            <p style="font-family: 'Kanit', sans-serif;">{{$supporter->nama}}, donasi kamu sudah berhasil di proses!</p>
            <p>Terima kasih atas donasi yang telah diberikan!</p>
        </div>
        
        <div class="kuitansi-container">
            <center><h2 style="font-family: 'Kanit', sans-serif;">KUITANSI</h2></center>
            <hr>
            <p>Waktu: {{ $supporter->tanggal }}</p>
            <p>Nama: {{ $supporter->nama }}</p>
            <p>Email: {{ $supporter->email }}</p>
            <p>Alamat: {{ $supporter->alamat }}</p>
            <p>No. Telp: {{ $supporter->no_telepon }}</p>
            <p>Jenis Donasi: {{ $supporter->donasi }}</p>
            <hr>
        </div>
        
        <center><a href="{{ route('generate-pdf', ['id' => $supporter->id]) }}" class="btn">Buat Kuitansi</a></center>
        
    </div>
</body>
</html>
