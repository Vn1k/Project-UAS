@extends('layouts.navigation')
@section('content')
@if($errors)
    <ul>
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
@endif

<div>
    <form action="/volunteer" method="post" enctype="multipart/form-data"> 
        @csrf 
        <h2>UPLOAD DATA VOLUNTEERS</h2>
        <div><input type="text" name="nama" placeholder="Nama"/></div>
        <div>
        <div><input type="file" name="photo" placeholder="Upload Foto" /></div>
        <div><input type="text" name="asal"placeholder="Asal" /></div>
        </div>
        <div><input type="text" name="no_telepon" placeholder="No Telp" /></div>
        <button type="submit">Submit</button>
        </form>
</div>

<table border="1"> 
    <tr> 
        <th>No.</th>
        <th>Nama</th>
        <th>Asal</th> 
        <th>No. Telp</th>
        <th>Foto</th>
        </tr>
        @foreach($volunteers as $volunteer)
        <tr>
            <th>{{$volunteer->id}}</th>
            <th>{{$volunteer->nama}}</th>
            <th>{{$volunteer->asal}}</th>
            <th>{{$volunteer->no_telepon}}</th>
            <th>photo</th>
            <td>
                <a href="/volunteer/{{$volunteer->id}}/show">EDIT</a>
            </td>
            <td>
                <form action="/volunteer/{{$volunteer->id}}" method="post">
                    @method('DELETE')
                    @csrf
                    <button type="submit">DELETE</button>
                </form>
            </td>
        </tr>
        @endforeach

</table>

@endsection