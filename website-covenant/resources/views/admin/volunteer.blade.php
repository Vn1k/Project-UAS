@if($errors)
<ul>
    @foreach($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach
</ul>
@endif

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Kanit:wght@400&display=swap">
    <title>Admin Volunteer</title>
</head>

<style>
body {
  font-family: 'Kanit', sans-serif;
  background-color: #f4f4f4;
}

/* form volunteer */
#cardVolunteer{
    border: 1px solid black;
    outline-color: black;
    border-radius: 10px;
    text-align: center;
    width: 800px;
}

#inputNama, #inputPhoto, #inputAsal, #inputNoTelepon{
  background-color: E5E4E4;
  border-radius: 6px;
}

#inputNama, #inputNoTelepon, #inputPhoto, #inputAsal{
  width: 500px;
  margin-bottom: 10px;
  padding: 8px;
}

#btnSubmit{
    background-color: FAF096;
    border-radius: 50px;
    padding: 5px;
    width: 100px;
    color: black;
    margin-top: 10px;
}

/* tabelHasilVolunteer */
#tabelHasilVolunteer{
  background-color: FAF096;
  width: 1750px;
}

#rowHasilVolunteer{
  background-color: white;
}
</style>

<div class="card" id="cardVolunteer">
    <h2>UPLOAD DATA VOLUNTEERS</h2>
    <br />
    <div class="card-body">

    <form action="/volunteer" method="post" enctype="multipart/form-data">
        @csrf
        <div><input id="inputNama" type="text" name="nama" placeholder="Nama" /></div>
        <div><input id="inputPhoto" type="file" name="photo" placeholder="Upload Foto" class="form-control"></div>
        <div><input id="inputAsal" type="text" name="asal" placeholder="Asal" class="form-control"></div>
        <div><input id="inputNoTelepon" type="text" name="no_telepon" placeholder="No. Telepon" /></div>
        <button id="btnSubmit" type="submit">Submit</button>
    </form>
    </div>
</div>

<table id="tabelHasilVolunteer">
    <tr>
        <th>No.</th>
        <th>Nama</th>
        <th>Asal</th>
        <th>No. Telepon</th>
        <th>Foto</th>
    </tr>
    @foreach($volunteers as $index => $volunteer)
    <tr id="rowHasilVolunteer">
        <th>{{$index + 1}}</th>
        <th>{{$volunteer->nama}}</th>
        <th>{{$volunteer->asal}}</th>
        <th>{{$volunteer->no_telepon}}</th>
        <th><img src="{{asset('storage/' . $volunteer->photo)}}" style="width: 300px" /></th>
        <td>
            <a href="/volunteer/{{$volunteer->id}}/edit">EDIT</a>
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