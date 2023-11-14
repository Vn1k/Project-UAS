<h1>Edit Kegiatan</h1>
<form action="/kegiatans/{{$kegiatan->id}}" method="post">
    @csrf
    <!-- No.: <input type="text" name="id" /><br /> -->
    Nama Kegiatan: <input type="text" name="nama_kegiatan" value="{{$kegiatan->nama_kegiatan}}" /><br />
    Tanggal: <input type="date" name="tanggal" value="{{$kegiatan->tanggal}}" /><br />
    Waktu: <input type="time" name="waktu" value="{{$kegiatan->waktu}}" /><br />
    Oleh: <input type="text" name="penyelenggara" value="{{$kegiatan->penyelenggara}}" /><br />
    Lokasi: <input type="text" name="lokasi" value="{{$kegiatan->lokasi}}" /><br />
    Deskripsi: <textarea name="deskripsi" value="{{$kegiatan->deskripsi}}" ></textarea><br />
    <!-- Foto: <input type="file" name="foto"><br/> -->
    <button type="submit">Submit</button>
</form>