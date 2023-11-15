<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Volunteer;
use Illuminate\Support\Facades\Storage;

class VolunteerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $volunteer = Volunteer::all();
        return view('admin.volunteer', ['volunteers' => $volunteer]);
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
            'nama' => 'required|max:50',
            'asal' => 'required|max:20',
            'no_telepon' => 'required|max:13',
        ]);

        $path = $request->file('photo')->storePublicly('photos', 'public');
        $ext = $request->file('photo')->extension();

        $volunteer = new Volunteer();
        $volunteer->nama = $request->nama;
        $volunteer->asal = $request->asal;
        $volunteer->no_telepon = $request->no_telepon;
        $volunteer->photo = $path;
        $volunteer->save();

        return redirect('/volunteer');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $volunteer = Volunteer::findOrFail($id);
        $photo = Storage::url($volunteer->photo);
        return view('admin.editvolunteer', ['volunteer' => $volunteer, 'photo' => $photo]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, string $id)
    {
        $this->validate($request, [
            'nama' => 'required|max:50',
            'asal' => 'required|max:20',
            'no_telepon' => 'required|max:13',
        ]);

        if($request->file('photo')!=null){
            $path = $request->file('photo')->storePublicly('photos', 'public');
        }else{
            $path = null;
        }

        $volunteer = Volunteer::findOrFail($id);
        $volunteer->nama = $request->nama;
        $volunteer->asal = $request->asal;
        $volunteer->no_telepon = $request->no_telepon;
        $volunteer->photo = $path;
        $volunteer->save();
        return redirect('/volunteer');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $volunteer = Volunteer::findOrFail($id);
        $volunteer->nama = $request->nama;
        $volunteer->asal = $request->asal;
        $volunteer->no_telepon = $request->no_telepon;
        $volunteer->save();
        return redirect('/admin');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $volunteer = Volunteer::findOrFail($id);
        $volunteer->delete();
        return redirect('/volunteer');
    }
}
