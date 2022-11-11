<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;

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
    return view('welcome');
});

Route::get('auth', [AuthController::class, 'index']);
Route::get('auth/register', [AuthController::class, 'register']);
Route::post('auth/postRegister', [AuthController::class, 'postRegister']);
Route::post('auth/postLogin', [AuthController::class, 'postLogin']);
Route::get('auth/logout', [AuthController::class, 'logout']);
Route::get('auth/berhasil', [AuthController::class, 'berhasil']);
Route::get('auth/catatan', [AuthController::class, 'catatan']);



Route::middleware(['auth'])->group(function () {    
    Route::resource('home', HomeController::class);
});
