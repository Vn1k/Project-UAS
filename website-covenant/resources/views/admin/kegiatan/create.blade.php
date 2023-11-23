<h1>Kegiatan</h1>
<form action="/kegiatans" method="post" enctype="multipart/form-data">
    @csrf
    <!-- No.: <input type="text" name="id" /><br /> -->
    Nama Kegiatan: <input type="text" name="nama_kegiatan" /><br />
    Tanggal: <input type="date" name="tanggal" /><br />
    Waktu: <input type="time" name="waktu" /><br />
    Oleh: <input type="text" name="penyelenggara" /><br />
    Lokasi: <input type="text" name="lokasi" /><br />
    Deskripsi: <textarea name="deskripsi"></textarea><br />
    Sukarelawan: <input type="text" name="sukarelawan" /><br />
    Sponsor: <input type="text" name="sponsor" /><br />
    <!-- Foto: <input type="file" name="foto"><br/> -->
    <button type="submit">Submit</button>
</form>

