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
    <div class="p-4 sm:ml-64">
        <div class="p-4">
            @if($errors)
            <ul>
                @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
            @endif

            <h1>Edit Kegiatan</h1>
            <form action="{{ route('admin.kegiatan.update', ['kegiatan' => $kegiatan->id]) }}" method="post" enctype="multipart/form-data">
                @csrf
                Nama Kegiatan: <input type="text" name="nama_kegiatan" value="{{$kegiatan->nama_kegiatan}}" /><br />
                Tanggal: <input type="date" name="tanggal" value="{{$kegiatan->tanggal}}" /><br />
                Waktu: <input type="time" name="waktu" value="{{$kegiatan->waktu}}" /><br />
                Oleh: <input type="text" name="penyelenggara" value="{{$kegiatan->penyelenggara}}" /><br />
                Lokasi: <input type="text" name="lokasi" value="{{$kegiatan->lokasi}}" /><br />
                Deskripsi: <input type="text" name="deskripsi" value="{{$kegiatan->deskripsi}}"><br />
                Volunteer
                <select name="volunteer_id">
                    @foreach ($volunteers as $volunteer)
                    <option value='{{$volunteer->id}}'>{{$volunteer->nama}}</option>
                    @endforeach
                </select>

                <br />
                Sponsor - Penanggung Jawab
                <select name="sponsor_id">
                    @foreach ($sponsors as $sponsor)
                    <option value='{{$sponsor->id}}'>{{$sponsor->instansi}} - {{$sponsor->penanggung_jawab}}
                    </option>
                    @endforeach
                </select>

                <br />
                Cover: <input type="file" name="cover"><br />
                Foto 1: <input type="file" name="photo"><br />
                Foto 2: <input type="file" name="photo2"><br />
                Foto 3: <input type="file" name="photo3"><br />

                <button type="submit">Submit</button>
            </form>
        </div>
    </div>
    @endsection
</body>

</html>