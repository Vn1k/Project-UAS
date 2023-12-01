<?php

namespace App\Http\Controllers;
use App\Models\KegiatanSponsor;
use App\Models\KegiatanVolunteer;
use App\Models\Kegiatan;
use App\Models\Sponsor;
use App\Models\Galleri;
use App\Models\Volunteer;
use App\Models\Supporter;
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

        $kegiatans = Kegiatan::where('jadwal', '>', Carbon::now())->get();

        foreach ($kegiatans as $kegiatan) {
            $waktu = Carbon::createFromFormat('H:i:s', $kegiatan->waktu);
            $kegiatan->formattedTime = $waktu->format('H:i');
        }

        return view('front.home', [
            'kegiatans' => $kegiatans,
            'jumlahKegiatan' => $jumlahKegiatan,
            'jumlahVolunteer' => $jumlahVolunteer,
        ]);
    }

    public function kegiatan()
    {
        $kegiatans = Kegiatan::all();
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

    public function dukungan()
    {
        return view('front.dukungan');
    }

    public function storeDukungan(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'alamat' => 'required|string|max:255',
            'no_telepon' => 'required|string|max:20',
            'bentuk_donasi' => 'required|string|max:255',
            'bukti_transfer' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'keterangan' => 'required|string',
            'agree' => 'required|accepted',
        ]);        

        // Create a new Supporter instance and fill it with the validated data
        $supporter = new Supporter();
        $supporter->nama = $validatedData['nama'];
        $supporter->tanggal = now(); // You may adjust the timestamp accordingly
        $supporter->email = $validatedData['email'];
        $supporter->alamat = $validatedData['alamat'];
        $supporter->no_telepon = $validatedData['no_telepon'];
        $supporter->donasi = $validatedData['bentuk_donasi'];
        $supporter->pesan = $validatedData['keterangan'];

        // Save the Supporter instance to get its ID
        $supporter->save();

        // Get the ID of the newly created supporter
        $supporterId = $supporter->id;

        // Generate a unique file name using the supporter's ID and save the uploaded file
        $filePath = $request->file('bukti_transfer')->storeAs('public/fotobukti/fotobukti_' . $supporterId . '.jpg');

        // Update the supporter's photo field with the file path
        $supporter->photo = $filePath;
        $supporter->save();

        // Redirect to 'dukungan-selesai' with supporter data
        return redirect()->route('front.dukungan-selesai', ['supporter' => $supporter]);

    }

    public function showSupporter(Request $request)
    {
        $supporterId = $request->query('supporter'); // Retrieve supporter ID from the URL parameter
        $supporter = Supporter::find($supporterId); // Retrieve supporter data based on the ID

        return view('front.dukungan-selesai', ['supporter' => $supporter]);
    }


    public function generateReceipt(string $id)
    {
        $supporter = Supporter::findOrFail($id);
        $pdf = PDF::loadView('front.dukungan-kuitansi', compact('supporter'));
        return $pdf->stream('front.dukungan-kuitansi.pdf');
    }
    
}
