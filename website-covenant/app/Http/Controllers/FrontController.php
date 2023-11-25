<?php

namespace App\Http\Controllers;
use App\Models\Galleri;
use App\Models\Volunteer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FrontController extends Controller
{
    public function home()
    {
        return view('front.home');
    }

    public function kegiatan()
    {
        return view('front.kegiatan');
    }
    public function detailKegiatan()
    {
        return view('front.detailKegiatan');
    }

    public function galleri()
    {
        $images = Galleri::query()->latest()->paginate(40);
        $dataBagi = $this->bagikanData($images);
        $bagian1 = $dataBagi[0];
        $bagian2 = $dataBagi[1];
        $bagian3 = $dataBagi[2];
        $bagian4 = $dataBagi[3];

        return view('front.galleri', compact('bagian1', 'bagian2', 'bagian3', 'bagian4'));
    }

    private function bagikanData($data)
    {
    $totalData = count($data);

    $jumlahPerBagian = floor($totalData / 4);

    $bagian1 = array_slice($data->items(), 0, $jumlahPerBagian);
    $bagian2 = array_slice($data->items(), $jumlahPerBagian, $jumlahPerBagian);
    $bagian3 = array_slice($data->items(), 2 * $jumlahPerBagian, $jumlahPerBagian);
    $bagian4 = array_slice($data->items(), 3 * $jumlahPerBagian, $jumlahPerBagian);
    
    return array($bagian1, $bagian2, $bagian3, $bagian4);
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

    public function dukungan()
    {
        return view('front.dukungan');
    }

    
}
