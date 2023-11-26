<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supporter;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class SupporterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $supporters = Supporter::all();
        return view('admin.supporter', ['supporters'=> $supporters]);
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
        // // Validate the incoming data
        // $validatedData = $request->validate([
        //     'nama' => 'required',
        //     'email' => 'required|email',
        //     'alamat' => 'required',
        //     'no_telepon' => 'required',
        //     'bentuk_donasi' => 'required',
        //     'bukti_transfer' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        //     'keterangan' => 'required',
        //     'agree' => 'required',
        // ]);        

        // // Create a new Supporter instance and fill it with the validated data
        // $supporter = new Supporter();
        // $supporter->nama = $validatedData['nama'];
        // $supporter->tanggal = now(); // You may adjust the timestamp accordingly
        // $supporter->email = $validatedData['email'];
        // $supporter->alamat = $validatedData['alamat'];
        // $supporter->no_telepon = $validatedData['no_telepon'];
        // $supporter->donasi = $validatedData['bentuk_donasi'];
        // $supporter->pesan = $validatedData['keterangan'];

        // // Save the Supporter instance to get its ID
        // $supporter->save();

        // // Get the ID of the newly created supporter
        // $supporterId = $supporter->id;

        // // Generate a unique file name using the supporter's ID and save the uploaded file
        // $filePath = $request->file('bukti_transfer')->storeAs('public/fotobukti/fotobukti_'. $supporterId . '.jpg');

        // // Update the supporter's photo field with the file path
        // $supporter->photo = $filePath;
        // $supporter->save();

        // // Redirect to 'dukungan-selesai' with supporter data
        // return redirect()->route('dukungan-selesai', ['supporter' => $supporter]);

        // Validate the incoming data
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
        return redirect()->route('dukungan-selesai', ['supporter' => $supporter]);

    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pdf = Pdf::loadView('dukungan-kuitansi', compact('supporter'));
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

    public function showSupporter(Request $request)
    {
        $supporterId = $request->query('supporter'); // Retrieve supporter ID from the URL parameter
        $supporter = Supporter::find($supporterId); // Retrieve supporter data based on the ID

        return view('dukungan-selesai', ['supporter' => $supporter]);
    }


    public function generateReceipt(string $id)
    {
        $supporter = Supporter::findOrFail($id);
        $pdf = PDF::loadView('dukungan-kuitansi', compact('supporter'));
        return $pdf->stream('dukungan-kuitansi.pdf');
    }

}
