<?php

namespace App\Http\Controllers;

use App\Models\KegiatanSponsor;
use App\Models\KegiatanVolunteer;
use App\Models\Sponsor;
use App\Models\Volunteer;
use Illuminate\Http\Request;
use App\Models\Kegiatan;
use Illuminate\Support\Facades\Storage;

class KegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kegiatan = Kegiatan::with(['volunteers', 'sponsors'])->get();
        $volunteer = Volunteer::all();
        $sponsor = Sponsor::all();
        return view('admin.kegiatan', ['kegiatans' => $kegiatan, 'volunteers' => $volunteer, 'sponsors' => $sponsor]);
        // var_dump($kegiatan);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // $pathCover = $request->file('cover')->storePublicly('covers', 'public');
        // $ext = $request->file('cover')->extension();
        
        // $pathPhoto = $request->file('photo')->storePublicly('photos', 'public');
        // $ext = $request->file('photo')->extension();

        $kegiatan = new Kegiatan();
        $kegiatan->nama_kegiatan = $request->nama_kegiatan;
        $kegiatan->tanggal = $request->jadwal;
        $kegiatan->waktu = $request->waktu;
        $kegiatan->penyelenggara = $request->penyelenggara;
        $kegiatan->lokasi = $request->lokasi;
        $kegiatan->deskripsi = $request->deskripsi;
        // $kegiatan->cover = $pathCover;
        // $kegiatan->photo = $pathPhoto;
        $kegiatan->save();

        $kegiatanvolunteer = new KegiatanVolunteer();
        $kegiatanvolunteer->volunteer_id = $request->volunteer_id;
        $kegiatanvolunteer->kegiatan_id = $kegiatan->id;
        $kegiatanvolunteer->save();

        $kegiatansponsor = new KegiatanSponsor();
        $kegiatansponsor->sponsor_id = $request->sponsor_id;
        $kegiatansponsor->kegiatan_id = $kegiatan->id;
        $kegiatansponsor->save();

        return redirect('/kegiatan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $kegiatan = Kegiatan::findOrFail($id);
        $volunteer = Volunteer::all();
        $sponsor = Sponsor::all();
        $cover = Storage::url($kegiatan->cover);
        $photo = Storage::url($kegiatan->photo);
        return view('admin.kegiatan.edit', ['kegiatan' => $kegiatan, 'volunteers' => $volunteer, 'sponsors' => $sponsor, 'cover' => $cover, 'photo' => $photo]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, string $id)
    {
        $pathCover = $request->file('cover')->storePublicly('covers', 'public');
        $ext = $request->file('cover')->extension();

        $pathPhoto = $request->file('photo')->storePublicly('photos', 'public');
        $ext = $request->file('photo')->extension();

        $kegiatan = Kegiatan::findOrFail($id);
        $kegiatan->nama_kegiatan = $request->nama_kegiatan;
        $kegiatan->tanggal = $request->tanggal;
        $kegiatan->waktu = $request->waktu;
        $kegiatan->lokasi = $request->lokasi;
        $kegiatan->deskripsi = $request->deskripsi;
        $kegiatan->cover = $pathCover;
        $kegiatan->photo = $pathPhoto;
        $kegiatan->save();
        return redirect('/kegiatan');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $kegiatan = Kegiatan::findOrFail($id);
        $kegiatan->nama_kegiatan = $request->nama_kegiatan;
        $kegiatan->tanggal = $request->tanggal;
        $kegiatan->waktu = $request->waktu;
        $kegiatan->lokasi = $request->lokasi;
        $kegiatan->deskripsi = $request->deskripsi;
        $kegiatan->save();

        return redirect('/kegiatan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        KegiatanSponsor::where('kegiatan_id', $id)->delete();
        KegiatanVolunteer::where('kegiatan_id', $id)->delete();
        $kegiatan = Kegiatan::find($id);
        $kegiatan->delete();
        return redirect('/kegiatan');
    }
}
