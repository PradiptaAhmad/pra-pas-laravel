<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HandphoneController;
use App\Http\Controllers\HeadsetController;

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

Route::get('/handphone', [HandphoneController::class, 'index']);
Route::get('/home', function () {
    return view('home', [
        'title' => 'home'
    ]);
});
Route::get('/handphone/{id}', [HandphoneController::class, 'show']);
Route::get('/headset', [HeadsetController::class, 'index']);
Route::get('/headset/{id}', [HeadsetController::class, 'show']);
