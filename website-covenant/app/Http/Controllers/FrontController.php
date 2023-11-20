<?php

namespace App\Http\Controllers;
use App\Models\Galleri;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function home()
    {
        return view('front.home');
    }

    public function kegiatan()
    {
        return view('front.aktivitas');
    }

    public function galleri()
    {
        $image = Galleri::query()->latest()->paginate(10);
        return view('front.galleri', compact('image'));
    }

    public function tentangKami()
    {
        return view('front.tentangKami');
    }

    public function sukarelawan()
    {
        return view('front.sukarelawan');
    }

    public function dukungan()
    {
        return view('front.dukungan');
    }

    
}
