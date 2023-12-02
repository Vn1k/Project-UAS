<?php

namespace App\Http\Controllers;
use App\Models\KegiatanSponsor;
use App\Models\KegiatanVolunteer;
use App\Models\Kegiatan;
use App\Models\Sponsor;
use App\Models\Supporter;
use App\Models\Galleri;
use App\Models\Volunteer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Carbon;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Validator;


class FrontController extends Controller
{
    public function home()
    {
        
        $jumlahKegiatan = Kegiatan::all()->count();
        $jumlahVolunteer = Volunteer::all()->count();
        $jumlahSupporter = Supporter::all()->count();

        $kegiatans = Kegiatan::where('jadwal', '>', Carbon::now())->get();

        foreach ($kegiatans as $kegiatan) {
            $waktu = Carbon::createFromFormat('H:i:s', $kegiatan->waktu);
            $kegiatan->formattedTime = $waktu->format('H:i');
        }

        return view('front.home', [
            'kegiatans' => $kegiatans,
            'jumlahKegiatan' => $jumlahKegiatan,
            'jumlahVolunteer' => $jumlahVolunteer,
            'jumlahSupporter' => $jumlahSupporter,
        ]);
    }

    public function kegiatan()
    {
        $kegiatans = Kegiatan::whereNotNull('cover')->get();
        return view('front.kegiatan', ['kegiatans' => $kegiatans]);
    }
    public function detailKegiatan($id)
    {
        $kegiatan = Kegiatan::with(['volunteers', 'sponsors'])->findOrFail($id);

        return view('front.detailkegiatan', ['kegiatan' => $kegiatan]);
    }

    public function galleri()
    {
        $images = Galleri::query()->latest()->get();
        $dataBagi = $this->bagikanData($images);
        $bagian1 = $dataBagi['bagian1'];
        $bagian2 = $dataBagi['bagian2'];
        $bagian3 = $dataBagi['bagian3'];
        $bagian4 = $dataBagi['bagian4'];

        return view('front.galleri', compact('bagian1', 'bagian2', 'bagian3', 'bagian4'));
    }

    private function bagikanData($data)
    {
        $dataById = collect($data)->groupBy('id');

        $jumlahBagian = 4;
        $bagian = [];

        for ($i = 0; $i < $jumlahBagian; $i++) {
            $bagian[] = [];
        }

        $index = 0;

        foreach ($dataById as $id => $items) {
            foreach ($items as $item) {
                $bagian[$index][] = $item;
                $index = ($index + 1) % $jumlahBagian;
            }
        }

        return [
            'bagian1' => $bagian[0],
            'bagian2' => $bagian[1],
            'bagian3' => $bagian[2],
            'bagian4' => $bagian[3],
        ];
    }

    public function tentangKami()
    {
        return view('front.tentangKami');
    }

    public function sukarelawan()
    {
        $volunteer = Volunteer::all();
        return view('front.sukarelawan', ['volunteers' => $volunteer]);
    }
}
