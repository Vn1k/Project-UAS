<?php

use App\Http\Controllers\FrontController;
use App\Http\Controllers\GalleriController;
use App\Http\Controllers\SupporterController;
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
Route::get('home', [FrontController::class, 'home'])->name('home');
Route::get('aktivitas', [FrontController::class, 'aktivitas'])->name('aktivitas');
Route::get('galleri', [FrontController::class, 'galleri'])->name('galleri');
Route::get('tentang-kami', [FrontController::class, 'tentangKami'])->name('tentangKami');
Route::get('sukarelawan', [FrontController::class, 'sukarelawan'])->name('sukarelawan');
Route::get('dukungan', [FrontController::class, 'dukungan'])->name('dukungan');

//end

//galleri route
Route::post('/image-compress', [GalleriController::class, 'compressImage']);

//supporter route
Route::resource('supporters', SupporterController::class);