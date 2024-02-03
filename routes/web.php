<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\interfaceController;
use App\Http\Controllers\IHMController;
use App\Http\Controllers\historiqueController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::resource('/', interfaceController::class);
Route::resource('/historique', historiqueController::class);
Route::resource('/IHM', IHMController::class);