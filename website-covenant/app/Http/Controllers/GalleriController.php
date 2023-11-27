<?php

namespace App\Http\Controllers;

use App\Models\Galleri;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class GalleriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $image = Galleri::latest()->paginate(10);
        return view('admin.galleri', compact('image'));
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
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg|max:10240'
        ]);

        $image = $request->file('image');
        $filename = time() . '.' . $request->image->extension();

        //proses kompress gambar
        $compressImage = Image::make($image)->encode('jpg', 75);

        //save gambar kompress
        $compressImage->save(public_path('storage/images/' . $filename));

        $image = new Galleri;
        $image->image = $filename;
        $image->save();

        return redirect()->back()->with([
            'message' => 'Image added successfully',
            'status' => 'success'
        ]);
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
        $image = Galleri::findOrFail($id);

        $imagepath = public_path('storage/images/' . $image->image);
        if (File::exists($imagepath)) {
            File::delete($imagepath);
        }

        $image->delete();

        return redirect()->back()->with([
            'message' => 'Image has been deleted',
            'status' => 'success'
        ]);
    }

    
    public function indexUser()
    {
        $image = Galleri::query()->latest()->paginate(10);
        return view('galleri', compact('image'));
    }
}
