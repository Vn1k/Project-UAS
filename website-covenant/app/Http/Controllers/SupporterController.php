<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supporter;
use Illuminate\Support\Facades\Storage;

class SupporterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $supporters = Supporter::all();
        return view('admin.supporter', ['supporters'=> $supporters]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        dd($request->all());
        // Validate the incoming data
        $validatedData = $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'alamat' => 'required',
            'no_telepon' => 'required',
            'bentuk_donasi' => 'required',
            'bukti_transfer' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'keterangan' => 'required',
            'agree' => 'required',
        ]);

        // Store the uploaded file (photo/bukti_transfer) in the storage/app/public directory
        $filePath = $request->file('bukti_transfer')->store('public');

        // Create a new Supporter instance and fill it with the validated data
        $supporter = new Supporter();
        $supporter->nama = $validatedData['nama'];
        $supporter->tanggal = now(); // You may adjust the timestamp accordingly
        $supporter->email = $validatedData['email'];
        $supporter->alamat = $validatedData['alamat'];
        $supporter->no_telepon = $validatedData['no_telepon'];
        $supporter->donasi = $validatedData['bentuk_donasi'];
        $supporter->pesan = $validatedData['keterangan'];
        $supporter->photo = $filePath; // Save the file path in the database

        // Save the Supporter instance to the database
        $supporter->save();

        // Redirect to 'dukungan-selesai' with supporter data
        return redirect()->route('dukungan-selesai', ['supporter' => $supporter]);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function showSupporter(Supporter $supporter)
    {
        return view('dukungan-selesai', ['supporter' => $supporter]);
    }

}
