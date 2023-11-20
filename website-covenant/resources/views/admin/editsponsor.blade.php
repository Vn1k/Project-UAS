@if($errors)
    <ul>
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
@endif

<form action="/sponsor/{{$sponsor->id}}" method="post">
    @csrf
    <h1>Edit Sponsor</h1>
    Instansi <input type="text" name="instansi" value="{{$sponsor->instansi}}" /><br />
    Penanggung Jawab <input type="text" name="penanggung_jawab" value="{{$sponsor->penanggung_jawab}}" /><br />
    <button type="submit">SUBMIT</button>
</form>

