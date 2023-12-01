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

Route::redirect('/login', '/admin/login');

Route::get('/admin', function () {
    return redirect()->route('admin.dashboard');
});

//yang berhubungan dengan admin masukin sini 
Route::middleware(['auth:admin', 'verified'])->group(function () {
    // Admin Dashboard
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
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
        'store' => 'supporter.store',
        'show' => 'supporter.show',
        'edit' => 'supporter.edit',
        'update' => 'supporter.update',
        'destroy' => 'supporter.destroy',
    ]);
    
});

Route::get('dukungan-selesai', [SupporterController::class, 'showSupporter'])->name('dukungan-selesai');
Route::post('/admin/logout', [AuthenticatedSessionController::class, 'destroy'])->name('admin.logout');

require __DIR__ . '/adminauth.php';

//supporter route


