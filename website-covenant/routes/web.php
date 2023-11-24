<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('home');
})->name('home');

//volunteer route

//sponsor route

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
    Route::get('admin/volunteer/{id}/show', [VolunteerController::class, 'show'])->name('admin.volunteer.show');
    Route::post('admin/volunteer', [VolunteerController::class, 'store'])->name('admin.volunteer.store');
    Route::post('admin/volunteer/{id}', [VolunteerController::class, 'edit'])->name('admin.volunteer.edit');
    Route::delete('admin/volunteer/{id}', [VolunteerController::class, 'destroy'])->name('admin.volunteer.destroy');

    //sponsor Resource Routes
    Route::get('admin/sponsor', [SponsorController::class, 'index'])->name('admin.sponsor.index');
    Route::get('admin/sponsor/{id}/show', [SponsorController::class, 'show'])->name('admin.sponsor.show');
    Route::post('admin/sponsor', [SponsorController::class, 'store'])->name('admin.sponsor.store');
    Route::post('admin/sponsor/{id}', [SponsorController::class, 'edit'])->name('admin.sponsor.edit');
    Route::delete('admin/sponsor/{id}', [SponsorController::class, 'destroy'])->name('admin.sponsor.destroy');

    //kegiatan Resource Routes
    Route::get('kegiatan', [KegiatanController::class, 'index']);
    Route::get('kegiatan/{id}/edit', [KegiatanController::class, 'show']);
    Route::post('kegiatan', [KegiatanController::class, 'store']);
    Route::post('kegiatan/{id}', [KegiatanController::class, 'edit']);
    Route::delete('kegiatan/{id}', [KegiatanController::class, 'destroy']);
});

Route::post('/admin/logout', [AuthenticatedSessionController::class, 'destroy'])->name('admin.logout');

require __DIR__ . '/adminauth.php';

//supporter route
Route::resource('supporters', SupporterController::class);
Route::get('dukungan-selesai', [SupporterController::class, 'showSupporter'])->name('dukungan-selesai');

