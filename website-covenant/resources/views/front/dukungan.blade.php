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
                    <div class="card-header">dukungan</div>
                    <div class="card-body">
                        <p>You are in Products Page</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
</body>
</html>