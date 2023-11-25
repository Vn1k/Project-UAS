<?php

use App\Http\Controllers\FrontController;
use App\Http\Controllers\GalleriController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\SponsorController;
use App\Http\Controllers\SupporterController;
use App\Http\Controllers\VolunteerController;
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
Route::get('home', [FrontController::class, 'home'])->name('home');
Route::get('kegiatans', [FrontController::class, 'kegiatan'])->name('kegiatan');
Route::get('detailKegiatan', [FrontController::class, 'detailKegiatan'])->name('detailKegiatan');
Route::get('gallery', [FrontController::class, 'galleri'])->name('galleri');
Route::get('tentang-Kami', [FrontController::class, 'tentangKami'])->name('tentangKami');
Route::get('sukarelawan', [FrontController::class, 'sukarelawan'])->name('sukarelawan');
Route::get('dukungan', [FrontController::class, 'dukungan'])->name('dukungan');

//end

//galleri route
Route::resource('galleri', GalleriController::class)->except(['show','edit','update']);

//volunteer route
Route::get('volunteer', [VolunteerController::class, 'index']);
Route::get('volunteer/{id}/edit', [VolunteerController::class, 'show']);
Route::post('volunteer', [VolunteerController::class, 'store']);
Route::post('volunteer/{id}', [VolunteerController::class, 'edit']);
Route::delete('volunteer/{id}', [VolunteerController::class, 'destroy']);

//sponsor route
Route::get('sponsor', [SponsorController::class, 'index']);
Route::get('sponsor/{id}/edit', [SponsorController::class, 'show']);
Route::post('sponsor', [SponsorController::class, 'store']);
Route::post('sponsor/{id}', [SponsorController::class, 'edit']);
Route::delete('sponsor/{id}', [SponsorController::class, 'destroy']);

//kegiatan route
Route::get('kegiatan', [KegiatanController::class, 'index']);
Route::get('kegiatan/{id}/edit', [KegiatanController::class, 'show']);
Route::post('kegiatan', [KegiatanController::class, 'store']);
Route::post('kegiatan/{id}', [KegiatanController::class, 'edit']);
// Route::get('kegiatan/{id}', [KegiatanController::class, 'edit']);
Route::delete('kegiatan/{id}', [KegiatanController::class, 'destroy']);
