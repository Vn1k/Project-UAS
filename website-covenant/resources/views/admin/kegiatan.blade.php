<!DOCTYPE html>
<html lang="en">
<head>
    @vite(['resources/css/app.css','resources/js/app.js'])
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Products</div>
                <div class="card-body">
                    <p>You are in Kegiatan Page</p>
                </div>
            </div>
            <a href="/kegiatans/create">Create new kegiatan</a>
            
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right text-blue-100 dark:text-blue-100">
                    <thead class="text-xs text-white uppercase bg-blue-600 dark:text-white">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Nama Kegiatan
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Tanggal
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Waktu
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Oleh
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Lokasi
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Deskripsi
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($kegiatan as $event)
                        <tr class="bg-blue-500 border-b border-blue-400">
                            <td class="px-6 py-4 font-medium text-blue-50 whitespace-nowrap dark:text-blue-100">
                                {{ $event->nama_kegiatan }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $event->tanggal }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $event->waktu }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $event->penyelenggara }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $event->lokasi }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $event->deskripsi }}
                            </td>
                            <td class="px-6 py-4">
                                <a href="/kegiatans/{{ $event->id }}" class="font-medium text-white hover:underline">SHOW</a> |
                                <a href="/kegiatans/{{ $event->id }}/edit" class="font-medium text-white hover:underline">EDIT</a> |
                                <form action="/kegiatans/{{ $event->id }}" method="post">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit">DELETE</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

</body>
</html>