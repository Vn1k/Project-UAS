<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donation Receipt</title>
    <!-- Add any necessary styles or scripts here -->
</head>
<body>
    <h1>Donation Receipt</h1>
    <p>Date and Time: {{ $supporter->tanggal }}</p>
    <p>Nama: {{ $supporter->nama }}</p>
    <p>Email: {{ $supporter->email }}</p>
    <p>Alamat: {{ $supporter->alamat }}</p>
    <p>No. Telp: {{ $supporter->no_telepon }}</p>
    <p>Jenis Donasi: {{ $supporter->donasi }}</p>
    <!-- Add other necessary fields as needed -->
</body>
</html>