<?php

use App\Http\Controllers\FrontController;
use App\Http\Controllers\GalleriController;
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

//end

//galleri route
Route::post('/image-compress', [GalleriController::class, 'compressImage']);
