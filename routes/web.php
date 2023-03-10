<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DetailController;

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

Route::get('/', [HomeController::class, 'index']);
Route::get('/mitra', [HomeController::class, 'mitra']);
Route::get('/testimoni', [HomeController::class, 'testimoni']);
Route::get('/kebijakan', [HomeController::class, 'kebijakan']);
Route::get('/syarat', [HomeController::class, 'syarat']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/portfolio', [HomeController::class, 'portfolio']);
Route::get('/contact', [HomeController::class, 'contact']);
Route::get('/team', [HomeController::class, 'team']);
Route::get('/klien', [HomeController::class, 'klien']);
Route::get('/payment', [HomeController::class, 'payment']);
Route::get('/album', [HomeController::class, 'album']);
Route::get('/detail/{id}', [DetailController::class, 'detailhasil']);