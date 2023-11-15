@if($errors)
    <ul>
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
@endif

<div>
    <form action="/sponsor" method="post" enctype="multipart/form-data"> 
        @csrf 
        <h2>UPLOAD DATA SPONSOR</h2>
        <div><input type="text" name="instansi"placeholder="Instansi" /></div>
        <div><input type="text" name="penanggung_jawab" placeholder="Penanggung Jawab" /></div>
        <button type="submit">Submit</button>
        </form>
</div>

<table border="1"> 
    <tr> 
        <th>No.</th>
        <th>Instansi</th>
        <th>Penanggung Jawab</th>
        </tr>
        @foreach($sponsors as $sponsor)
        <tr>
            <th>{{$sponsor->id}}</th>
            <th>{{$sponsor->instansi}}</th>
            <th>{{$sponsor->penanggung_jawab}}</th>
            <td>
                <a href="/sponsor/{{$sponsor->id}}/show">EDIT</a>
            </td>
            <td>
                <form action="/sponsor/{{$sponsor->id}}" method="post">
                    @method('DELETE')
                    @csrf
                    <button type="submit">DELETE</button>
                </form>
            </td>
        </tr>
        @endforeach

</table>