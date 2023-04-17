<?php

use App\Http\Controllers\SiswaController;
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
    return view('welcome');
});

Route::get('/siswapplg',[SiswaController::class, 'index']);
Route::get('/siswa/create',[SiswaController::class, 'create']);
Route::post('/siswa/store',[SiswaController::class, 'store']);
Route::get('/siswa/{id}/edit',[SiswaController::class, 'edit']);
Route::put('/siswa/{id}',[SiswaController::class, 'update']);
Route::delete('/siswa/{id}',[SiswaController::class, 'destroy']);