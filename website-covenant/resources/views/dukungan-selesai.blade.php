<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submission Successful</title>
    <!-- Add any necessary styles or scripts here -->
</head>
<body>
    <h1>Your Submission is Successful!</h1>
    <p>Thank you for your support.</p>
    <p>Date and Time: {{ $supporter->tanggal }}</p>
    <p>Nama: {{ $supporter->nama }}</p>
    <p>Email: {{ $supporter->email }}</p>
    <p>Alamat: {{ $supporter->alamat }}</p>
    <p>No. Telp: {{ $supporter->no_telepon }}</p>
    <p>Jenis Donasi: {{ $supporter->donasi }}</p>
    
    <a href="{{ route('generate-pdf', ['id' => $supporter->id]) }}" class="btn btn-primary">Generate Receipt</a>

</body>
</html>
