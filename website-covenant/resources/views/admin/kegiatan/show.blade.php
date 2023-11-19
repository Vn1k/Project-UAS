<h1>{{$kegiatan->nama_kegiatan}}</he>
<a href="/kegiatans">< back to kegiatan list</a>
<br />
        Nama Kegiatan: {{$kegiatan->nama_kegiatan}}<br />
        Tanggal: {{$kegiatan->tanggal}}<br />
        Waktu: {{$kegiatan->waktu}}<br />
        Oleh: {{$kegiatan->penyelenggara}}<br />
        Lokasi: {{$kegiatan->lokasi}}<br />
        Deskripsi: {{$kegiatan->deskripsi}}<br />
        Sukarelawan: {{$volunteer->nama}}<br />
        Sponsor: {{$sponsor->instansi}}<br />
        Photo: <img src="{{asset($photo)}}" />
        Cover: <img src="{{asset($photo)}}" />