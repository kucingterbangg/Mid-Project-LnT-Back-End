<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\tabelKaryawanController;

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

Route::get('/tabelKaryawan', [tabelKaryawanController::class,'Index']);
Route::get('/tabelKaryawan/create', [tabelKaryawanController::class,'create']);
Route::post('/tabelKaryawan/store', [tabelKaryawanController::class,'store']);
Route::get('/tabelKaryawan/{id}/edit', [tabelKaryawanController::class,'edit']);
Route::put('/tabelKaryawan/{id}', [tabelKaryawanController::class,'update']);
Route::delete('/tabelKaryawan/{id}', [tabelKaryawanController::class,'destroy']);