<?php

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
Route::get('aktivitas', [FrontController::class, 'aktivitas'])->name('Aktivitas');
Route::get('galleri', [FrontController::class, 'galleri'])->name('Galleri');
Route::get('tentang-kami', [FrontController::class, 'tentangKami'])->name('');


