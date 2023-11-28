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
    Route::get('admin/volunteer', [VolunteerController::class, 'index'])->name('admin.volunteer.index');
    Route::get('admin/volunteer/{id}/edit', [VolunteerController::class, 'show'])->name('admin.volunteer.show');
    Route::post('admin/volunteer', [VolunteerController::class, 'store'])->name('admin.volunteer.store');
    Route::post('admin/volunteer/{id}', [VolunteerController::class, 'edit'])->name('admin.volunteer.edit');
    Route::delete('admin/volunteer/{id}', [VolunteerController::class, 'destroy'])->name('admin.volunteer.destroy');

    //sponsor Resource Routes
    Route::get('admin/sponsor', [SponsorController::class, 'index'])->name('admin.sponsor.index');
    Route::get('admin/sponsor/{id}/edit', [SponsorController::class, 'show'])->name('admin.sponsor.show');
    Route::post('admin/sponsor', [SponsorController::class, 'store'])->name('admin.sponsor.store');
    Route::post('admin/sponsor/{id}', [SponsorController::class, 'edit'])->name('admin.sponsor.edit');
    Route::delete('admin/sponsor/{id}', [SponsorController::class, 'destroy'])->name('admin.sponsor.destroy');

    //kegiatan Resource Routes
    Route::get('admin/kegiatan', [KegiatanController::class, 'index'])->name('admin.kegiatan.index');
    Route::get('admin/kegiatan/{id}/edit', [KegiatanController::class, 'show'])->name('admin.kegiatan.show');
    Route::post('admin/kegiatan', [KegiatanController::class, 'store'])->name('admin.kegiatan.store');
    Route::post('admin/kegiatan/{id}', [KegiatanController::class, 'edit'])->name('admin.kegiatan.edit');
    Route::delete('admin/kegiatan/{id}', [KegiatanController::class, 'destroy'])->name('admin.kegiatan.destroy');
    
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


