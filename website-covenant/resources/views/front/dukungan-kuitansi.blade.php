<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submission Successful</title>
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



    </style>
</head>

<body>
    <div class="container">       
        <div class="kuitansi-container">
            <center><h2>KUITANSI</h2></center>
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
    </div>
</body>
</html>
