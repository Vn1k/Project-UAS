<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Volunteer;
use Intervention\Image\Facades\Image;
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
            'photo' => 'required|image|mimes:jpeg,png,jpg|max:10240',
        ]);

        $photo = $request->file('photo');
        $filename = time() . '.' . $photo->extension();

        // Process and compress the image
        $compressedImage = Image::make($photo)->encode('jpg', 75);

        // Save the compressed image
        $path = 'photos/' . $filename;
        $compressedImage->save(public_path('storage/' . $path));

        $volunteer = new Volunteer();
        $volunteer->nama = $request->nama;
        $volunteer->asal = $request->asal;
        $volunteer->no_telepon = $request->no_telepon;
        $volunteer->photo = $path;
        $volunteer->save();

        return redirect()->route('admin.volunteer.index');
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
    
        $volunteer = Volunteer::findOrFail($id);

        return redirect()->route('admin.volunteer.index', ['volunteer' => $volunteer]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'nama' => 'required|max:50',
            'asal' => 'required|max:20',
            'no_telepon' => 'required|max:13',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg|max:10240',
        ]);

        $volunteer = Volunteer::findOrFail($id);
        $volunteer->nama = $request->nama;
        $volunteer->asal = $request->asal;
        $volunteer->no_telepon = $request->no_telepon;

        if ($request->hasFile('photo')) {
            // Process and compress the updated image
            $photo = $request->file('photo');
            $filename = time() . '.' . $photo->extension();

            // Compress the image
            $compressedImage = Image::make($photo)->encode('jpg', 75);

            // Save the compressed image
            $path = 'photos/' . $filename;
            $compressedImage->save(public_path('storage/' . $path));

            // Delete the previous image file
            Storage::delete($volunteer->photo);

            $volunteer->photo = $path;
        }

        $volunteer->save();

        return redirect()->route('admin.volunteer.index');
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $volunteer = Volunteer::findOrFail($id);
        $volunteer->delete();
        return redirect()->route('admin.volunteer.index');
    }
}
