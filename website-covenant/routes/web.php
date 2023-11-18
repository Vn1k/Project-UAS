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
Route::get('home', [FrontController::class, 'home'])->name('home');
Route::get('kegiatan', [FrontController::class, 'kegiatan'])->name('kegiatan');
Route::get('galleri', [FrontController::class, 'galleri'])->name('galleri');
Route::get('tentang-kami', [FrontController::class, 'tentangKami'])->name('tentangKami');
Route::get('sukarelawan', [FrontController::class, 'sukarelawan'])->name('sukarelawan');
Route::get('dukungan', [FrontController::class, 'dukungan'])->name('dukungan');

//end

//galleri route
Route::post('/image-compress', [GalleriController::class, 'compressImage']);

//acd
Route::resource('kegiatans', KegiatanController::class);
//volunteer route
Route::get('volunteer', [VolunteerController::class, 'index']);
Route::get('volunteer/{id}/show', [VolunteerController::class, 'show']);
Route::post('volunteer', [VolunteerController::class, 'store']);
Route::post('volunteer/{id}', [VolunteerController::class, 'edit']);
Route::delete('volunteer/{id}', [VolunteerController::class, 'destroy']);

//sponsor route
Route::get('sponsor', [SponsorController::class, 'index']);
Route::get('sponsor/{id}/show', [SponsorController::class, 'show']);
Route::post('sponsor', [SponsorController::class, 'store']);
Route::post('sponsor/{id}', [SponsorController::class, 'edit']);
Route::delete('sponsor/{id}', [SponsorController::class, 'destroy']);
