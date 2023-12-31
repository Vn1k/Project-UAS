<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\GalleriController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\SponsorController;
use App\Http\Controllers\SupporterController;
use App\Http\Controllers\VolunteerController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Models\Sponsor;
use App\Models\Galleri;
use App\Models\Volunteer;
use App\Models\Kegiatan;
use App\Models\Supporter;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Navbar-homepage
Route::get('/', [FrontController::class, 'home'])->name('home');
Route::get('kegiatans', [FrontController::class, 'kegiatan'])->name('kegiatan');
Route::get('detailkegiatan/{id}', [FrontController::class, 'detailKegiatan'])->name('detailkegiatan.show');
Route::get('gallery', [FrontController::class, 'galleri'])->name('galleri');
Route::get('tentang-Kami', [FrontController::class, 'tentangKami'])->name('tentangKami');
Route::get('sukarelawan', [FrontController::class, 'sukarelawan'])->name('sukarelawan');
Route::get('dukungan', [FrontController::class, 'dukungan'])->name('dukungan');

Route::post('proses_dukungan', [FrontController::class, 'storeDukungan'])->name('proses_dukungan');
Route::get('dukungan-selesai/{id}', [FrontController::class, 'showDukunganSelesai'])->name('dukungan-selesai');
Route::get('/generate-pdf/{id}', [FrontController::class, 'generateReceipt'])->name('generate-pdf');


Route::redirect('/login', '/admin/login');


Route::get('/admin', function () {
    return redirect()->route('admin.dashboard');
});

//yang berhubungan dengan admin masukin sini 
Route::middleware(['auth:admin', 'verified'])->group(function () {
    // Admin Dashboard
    Route::get('/admin/dashboard', function () {
        $countspon = Sponsor::count();
        $countvoult = Volunteer::count();
        $countsupp = Supporter::count();
        $countkegiatan = Kegiatan::count();
        $countgaleri = Galleri::count();
        return view('admin.dashboard', compact('countspon','countvoult','countsupp','countkegiatan','countgaleri'));
    })->name('admin.dashboard');

    // Galleri Resource Routes
    Route::resource('/admin/galleri', GalleriController::class)->names([
        'index' => 'galleri.index',
        'create' => 'galleri.create',
        'store' => 'galleri.store',
        'show' => 'galleri.show',
        'edit' => 'galleri.edit',
        'update' => 'galleri.update',
        'destroy' => 'galleri.destroy',
    ]);

    //Volunteer Resource Routes
    Route::resource('admin/volunteer', VolunteerController::class)->names([
        'index' => 'admin.volunteer.index',
        'create' => 'admin.volunteer.create',
        'store' => 'admin.volunteer.store',
        'show' => 'admin.volunteer.show',
        'edit' => 'admin.volunteer.edit',
        'destroy' => 'admin.volunteer.destroy',
    ]);

    Route::put('admin/volunteer/{volunteer}', [VolunteerController::class, 'update'])->name('admin.volunteer.update');

    //Sponsor Resource Routes
    Route::resource('admin/sponsor', SponsorController::class)->names([
        'index' => 'admin.sponsor.index',
        'create' => 'admin.sponsor.create',
        'store' => 'admin.sponsor.store',
        'show' => 'admin.sponsor.show',
        'edit' => 'admin.sponsor.edit',
        'destroy' => 'admin.sponsor.destroy',
    ]);

    Route::put('admin/sponsor/{sponsor}', [SponsorController::class, 'update'])->name('admin.sponsor.update');

    //kegiatan Resource Routes
    Route::resource('admin/kegiatan', KegiatanController::class)->names([
        'index' => 'admin.kegiatan.index',
        'create' => 'admin.kegiatan.create',
        'store' => 'admin.kegiatan.store',
        'show' => 'admin.kegiatan.show',
        'edit' => 'admin.kegiatan.edit',
        'destroy' => 'admin.kegiatan.destroy',
    ]);
    
    Route::put('admin/kegiatan/{kegiatan}', [KegiatanController::class, 'update'])->name('admin.kegiatan.update');

    //Supporter Resource Routes
    Route::resource('admin/supporters', SupporterController::class)->names([
        'index' => 'supporter.index',
        'create' => 'supporter.create',
        'show' => 'supporter.show',
        'edit' => 'supporter.edit',
        'update' => 'supporter.update',
        'destroy' => 'supporter.destroy',
    ]);
});

Route::post('/admin/logout', [AuthenticatedSessionController::class, 'destroy'])->name('admin.logout');

require __DIR__ . '/adminauth.php';

