<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\GalleriController;
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

Route::get('/', function () {
    return view('welcome');
});

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
Route::get('/admin', function () {
    return redirect()->route('admin.dashboard');
});

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth:admin', 'verified'])->name('admin.dashboard');

Route::resource('/admin/galleri', GalleriController::class)->middleware(['auth:admin', 'verified']);

require __DIR__.'/adminauth.php';