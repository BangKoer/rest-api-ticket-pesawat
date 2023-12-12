<?php

use App\Http\Controllers\PembelianController;
use App\Http\Controllers\TiketPesawatController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

//==== Untuk Server
Route::get('/datas', [TiketPesawatController::class, 'index']);
Route::post('/datas', [TiketPesawatController::class, 'addData']);
Route::get('/datas/{id}', [TiketPesawatController::class, 'searchId']);
Route::put('/datas/{id}', [TiketPesawatController::class, 'updateData']);
Route::delete('/datas/{id}', [TiketPesawatController::class, 'deleteData']);

//======= Untuk Client
Route::get('/pembelianDatas', [PembelianController::class, 'index']);
Route::get('/pembelianDatas/{id}', [PembelianController::class, 'show']);
Route::post('/pembelianDatas', [PembelianController::class, 'create']);
Route::put('/pembelianDatas/{id}', [PembelianController::class, 'edit']);
Route::delete('/pembelianDatas/{id}', [PembelianController::class, 'destroy']);

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
