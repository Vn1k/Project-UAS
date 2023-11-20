@if($errors)
    <ul>
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
@endif

<form action="/volunteer/{{$volunteer->id}}" method="post">
    @csrf
    <h1>Edit Volunteer</h1>
    Nama <input type="text" name="nama" value="{{$volunteer->nama}}" /><br />
    Asal <input type="text" name="asal" value="{{$volunteer->asal}}" /><br />
    No. Telp <input type="text" name="no_telepon" value="{{$volunteer->no_telepon}}"><br />
    photo <input type="file" name="photo" value="{{$volunteer->photo}}"><br />
    <button type="submit">SUBMIT</button>
</form>
