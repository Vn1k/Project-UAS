<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Galleri;
use Intervention\Image\Facades\Image;

class GalleriController extends Controller
{
    public function galleri()
    {
        return $this->hasMany(Galleri::class);
    }

    public function compressPhoto(Request $request)
    {
        $this->validate($request, [
            'photo' => 'required|image|mimes:jpg,jpeg,png,gif,svg|max:2048'
        ]);

        $photo = $request->file('photo');
        /* 
            Note: Use $photo = base64_decode($request['photo'])
            if the photo is sent as a base64 encoded photo.
        */
        $photo_name = time() . '_' . $photo->getClientOriginalName();
        $path = public_path('uploads/') . "/" . $photo_name;

        Image::make($photo->getRealPath())->resize(150, 150)->save($path);

        return response()->json(
            [
                'data' => 'Photo compressed and added'
            ],
            201
        );
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        //
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
}
