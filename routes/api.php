<?php

use Illuminate\Http\Request;
use App\Http\Controllers\KomentarController;
use App\Http\Controllers\MadingController;
use App\Http\Controllers\AdminController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('komentar')->group(function () {
  Route::post('create', [KomentarController::class, 'create']);
  Route::get('all', [KomentarController::class, 'index']);
  Route::delete('delete/{id}', [KomentarController::class, 'destroy']);
});

Route::prefix('mading')->group(function () {
  Route::post('create', [MadingController::class, 'create']);
  Route::get('all', [MadingController::class, 'index']);
  Route::get('find/{id}', [MadingController::class, 'show']);
  Route::delete('delete/{id}', [MadingController::class, 'destroy']);
});

Route::prefix('admin')->group(function () {
  Route::post('create', [AdminController::class, 'create']);
  Route::post('login', [AdminController::class, 'login']);
  Route::get('all', [AdminController::class, 'index']);
});