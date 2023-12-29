<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPinjamController;
use App\Http\Controllers\DashboardKembaliController;
use App\Http\Controllers\DashboardManajemenController;
use App\Http\Controllers\DashboardPelangganController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/login', [LoginController::class,'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class,'authenticate']);
Route::post('/logout', [LoginController::class,'logout']);

Route::get('/register', [RegisterController::class,'index'])->middleware('guest');
Route::post('/register', [RegisterController::class,'store']);

Route::get('/dashboard', function (){
    return view('dashboard.index');
})->middleware('auth');

Route::resource('/dashboard/manajemen', DashboardManajemenController::class)->middleware('auth');
Route::resource('/dashboard/pinjam', DashboardPinjamController::class)->middleware('auth');
Route::resource('/dashboard/pelanggan', DashboardPelangganController::class)->middleware('auth');


