@extends('layouts.app')
  
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Galleri</div>
                <div class="card-body">
                    <p>You are in Products Page</p>
                    <form action="/image-compress" method="post">
                        <button type="submit">submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection