<?php

namespace App\Http\Controllers;

use App\Models\KegiatanSponsor;
use App\Models\KegiatanVolunteer;
use App\Models\Sponsor;
use App\Models\Volunteer;
use Illuminate\Http\Request;
use App\Models\Kegiatan;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

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
        $kegiatan = new Kegiatan();
        $kegiatan->nama_kegiatan = $request->nama_kegiatan;
        $kegiatan->jadwal = $request->jadwal;
        $kegiatan->waktu = $request->waktu;
        $kegiatan->penyelenggara = $request->penyelenggara;
        $kegiatan->lokasi = $request->lokasi;
        $kegiatan->deskripsi = $request->deskripsi;
        $kegiatan->save();

        $kegiatanvolunteer = new KegiatanVolunteer();
        $kegiatanvolunteer->volunteer_id = $request->volunteer_id;
        $kegiatanvolunteer->kegiatan_id = $kegiatan->id;
        $kegiatanvolunteer->save();

        $kegiatansponsor = new KegiatanSponsor();
        $kegiatansponsor->sponsor_id = $request->sponsor_id;
        $kegiatansponsor->kegiatan_id = $kegiatan->id;
        $kegiatansponsor->save();

        return redirect()->route('admin.kegiatan.index');
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
        $photo2 = Storage::url($kegiatan->photo2);
        $photo3 = Storage::url($kegiatan->photo3);
        return view('admin.kegiatan.edit', ['kegiatan' => $kegiatan, 'volunteers' => $volunteer, 'sponsors' => $sponsor, 'cover' => $cover, 'photo' => $photo, 'photo2' => $photo2, 'photo3' => $photo3]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, string $id)
    {
   
        $kegiatan = Kegiatan::findOrFail($id);
        return redirect()->route('admin.kegiatan.index', ['kegiatan' => $kegiatan]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $kegiatan = Kegiatan::findOrFail($id);

        // Function to handle image compression
        function compressAndSaveImage($image, $path)
        {
            $filename = time() . '.' . $image->extension();
            $compressedImage = Image::make($image)->encode('jpg', 100);
            $compressedImage->save(public_path('storage/' . $path . $filename));
            return $path . $filename;
        }

        $pathCover = $kegiatan->cover;
        $pathPhoto = $kegiatan->photo;
        $pathPhoto2 = $kegiatan->photo2;
        $pathPhoto3 = $kegiatan->photo3;

        // Check if cover file is present
        if ($request->hasFile('cover')) {
            if ($pathCover !== null) {
                Storage::delete($pathCover);
            }
            $pathCover = compressAndSaveImage($request->file('cover'), 'covers/');
        }

        // Check if photo file is present
        if ($request->hasFile('photo')) {
            if ($pathPhoto !== null) {
                Storage::delete($pathPhoto);
            }
            $pathPhoto = compressAndSaveImage($request->file('photo'), 'photos/');
        }

        // Check if photo2 file is present
        if ($request->hasFile('photo2')) {
            if ($pathPhoto2 !== null) {
                Storage::delete($pathPhoto2);
            }
            $pathPhoto2 = compressAndSaveImage($request->file('photo2'), 'photos/');
        }

        // Check if photo3 file is present
        if ($request->hasFile('photo3')) {
            if ($pathPhoto3 !== null) {
                Storage::delete($pathPhoto3);
            }
            $pathPhoto3 = compressAndSaveImage($request->file('photo3'), 'photos/');
        }

        // Update the database with the new file paths
        $kegiatan->cover = $pathCover;
        $kegiatan->photo = $pathPhoto;
        $kegiatan->photo2 = $pathPhoto2;
        $kegiatan->photo3 = $pathPhoto3;
        $kegiatan->save();


        $kegiatan->nama_kegiatan = $request->nama_kegiatan;
        $kegiatan->penyelenggara = $request->penyelenggara;
        $kegiatan->jadwal = $request->jadwal;
        $kegiatan->waktu = $request->waktu;
        $kegiatan->lokasi = $request->lokasi;
        $kegiatan->deskripsi = $request->deskripsi;
        $kegiatan->cover = $pathCover;
        $kegiatan->photo = $pathPhoto;
        $kegiatan->photo2 = $pathPhoto2;
        $kegiatan->photo3 = $pathPhoto3;
        
        $kegiatan->save();

        return redirect()->route('admin.kegiatan.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        KegiatanSponsor::where('kegiatan_id', $id)->delete();
        KegiatanVolunteer::where('kegiatan_id', $id)->delete();
        
        $kegiatan = Kegiatan::findOrFail($id);

        $kegiatanCovers = public_path('storages/covers/' . $kegiatan->cover);
        if (File::exists($kegiatanCovers)) {
            File::delete($kegiatanCovers);
        }
        $kegiatanPhotos = public_path('storages/photos/' . $kegiatan->photo);
        if (File::exists($kegiatanPhotos)) {
            File::delete($kegiatanPhotos);
        }

        $kegiatanPhotos2 = public_path('storages/photos/' . $kegiatan->photo2);
        if (File::exists($kegiatanPhotos2)) {
            File::delete($kegiatanPhotos2);
        }

        $kegiatanPhotos3 = public_path('storages/photos/' . $kegiatan->photo3);
        if (File::exists($kegiatanPhotos3)) {
            File::delete($kegiatanPhotos3);
        }

        $kegiatan->delete();
        return redirect()->route('admin.kegiatan.index');
    }

}
