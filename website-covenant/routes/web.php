<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\GalleriController;
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

Route::redirect('/login', '/admin/login');

Route::get('/admin', function () {
    return redirect()->route('admin.dashboard');
});

Route::middleware(['auth:admin', 'verified'])->group(function () {
    // Admin Dashboard
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    // Galleri Resource Routes
    Route::resource('/admin/galleri', GalleriController::class)->names([
        'index' => 'admin.galleri.index',
        'create' => 'admin.galleri.create',
        'store' => 'admin.galleri.store',
        'show' => 'admin.galleri.show',
        'edit' => 'admin.galleri.edit',
        'update' => 'admin.galleri.update',
        'destroy' => 'admin.galleri.destroy',
    ]);
});


Route::post('/admin/logout', [AuthenticatedSessionController::class, 'destroy'])->name('admin.logout');

require __DIR__.'/adminauth.php';