<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sponsor;

class SponsorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sponsor = Sponsor::all();
        return view('admin.sponsor', ['sponsors' => $sponsor]);
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
        $this->validate($request, [
            'instansi' => 'required|max:255',
            'penanggung_jawab' => 'required|max:50'
        ]);

        $sponsor = new Sponsor();
        $sponsor->instansi = $request->instansi;
        $sponsor->penanggung_jawab = $request->penanggung_jawab;
        $sponsor->save();

        return redirect('/sponsor');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $sponsor = Sponsor::findOrFail($id);
        return view('admin.editsponsor', ['sponsor' => $sponsor]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, string $id)
    {
        $this->validate($request, [
            'instansi' => 'required|max:255',
            'penanggung_jawab' => 'required|max:50'
        ]);

        $sponsor = Sponsor::findOrFail($id);
        $sponsor->instansi = $request->instansi;
        $sponsor->penanggung_jawab = $request->penanggung_jawab;
        $sponsor->save();
        return redirect('/sponsor');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $sponsor = Sponsor::findOrFail($id);
        $sponsor->instansi = $request->instansi;
        $sponsor->penanggung_jawab = $request->penanggung_jawab;
        $sponsor->save();
        return redirect('/admin');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $sponsor = Sponsor::findOrFail($id);
        $sponsor->delete();
        return redirect('/sponsor');
    }
}
