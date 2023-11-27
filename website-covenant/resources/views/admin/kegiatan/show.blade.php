<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
</head>

<body>
        @extends('layouts.navigation')
        @section('content')
        <h1>{{$kegiatan->nama_kegiatan}}</h1>
        <br />
        <a href="/kegiatan/{{$kegiatan->id}}">back to kegiatan list</a><br />
        Nama Kegiatan: {{$kegiatan->nama_kegiatan}}<br />
        Tanggal: {{$kegiatan->tanggal}}<br />
        Waktu: {{$kegiatan->waktu}}<br />
        Oleh: {{$kegiatan->penyelenggara}}<br />
        Lokasi: {{$kegiatan->lokasi}}<br />
        Deskripsi: {{$kegiatan->deskripsi}}<br />
        @endsection
</body>

</html>