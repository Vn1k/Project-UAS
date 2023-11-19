<?php

namespace App\Http\Controllers;

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
        return view('admin.kegiatan', ['kegiatans' => $kegiatan]);
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
        // $path = $request->file('photo')->storePublicly('photos', 'public');
        // $ext = $request->file('photo')->extension();

        $kegiatan = new Kegiatan();
        $kegiatan->nama_kegiatan = $request->nama_kegiatan;
        $kegiatan->tanggal = $request->tanggal;
        $kegiatan->waktu = $request->waktu;
        $kegiatan->penyelenggara = $request->penyelenggara;
        $kegiatan->lokasi = $request->lokasi;
        $kegiatan->deskripsi = $request->deskripsi;
        // $kegiatan->photo = $path;
        //test
        $kegiatan->save();

        return redirect('/kegiatans');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $kegiatan = Kegiatan::findOrFail($id);
        return view('kegiatans.show', ['kegiatan' => $kegiatan]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $kegiatan = Kegiatan::findOrFail($id);
        return view('kegiatans.edit', ['kegiatan' => $kegiatan]);
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

        return redirect('/kegiatans');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $kegiatan = Kegiatan::find($id);
        $kegiatan -> delete();
        return redirect('/kegiatans');
    }
}
