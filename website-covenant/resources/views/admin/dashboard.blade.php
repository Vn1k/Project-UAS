<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>

<body>
    @extends('layouts.navigation')
    @section('content')
    <div class="p-4 sm:ml-64">
        <div class="p-4">
            <h3>Sponsor count: {{ $countspon }} </h3>
            <h3>Volunteer Count {{$countvoult}}</h3>
            <h3>Kegiatan {{$countkegiatan}}</h3>
            <h3>galleri {{$countgaleri}}</h3>
            <h3>supporter {{$countsupp}}</h3>
        </div>
    </div>
    @endsection
</body>

</html>