@extends('layouts.app')
  
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Products</div>
                <div class="card-body">
                    <p>You are in Kegaitan Page</p>
                </div>
            </div>
            <a href="/kegiatans/create">Create new kegiatan</a>
<table border="1">
    <tr>
        <th>No.</th>
        <th>Nama Kegiatan</th>
        <th>Tanggal</th>
        <th>Waktu</th>
        <th>Oleh</th>
        <th>Lokasi</th>
        <th>Deskripsi</th>
        <th>Sukarelawan</th>
        <tn>Sponsor</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    @foreach($kegiatan as $event)
    <tr>
        <td>{{$event->nama_kegiatan}}</td>
        <td>{{$event->tanggal}}</td>
        <td>{{$event->waktu}}</td>
        <td>{{$event->penyelenggara}}</td>
        <td>{{$event->lokasi}}</td>
        <td>{{$event->deskripsi}}</td>
        <td>{{$volunteer->nama}}</td>
        <td>{{$sponsor->instansi}}</td>
        <td>
            <a href="/kegiatans/{{$event->id}}">SHOW</a> |
            <a href="/kegiatans/{{$event->id}}/edit">EDIT</a> |
            <form action="/kegiatans/{{$event->id}}" method="post">
                @method('DELETE')
                @csrf
                <button type="submit">DELETE</button>
        </td>
    </tr>
    @endforeach
</table>
        </div>
    </div>
</div>
@endsection