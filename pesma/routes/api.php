<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ZanrController;
use App\Http\Controllers\PesmaController;
use App\Http\Controllers\IzvodjacController;
use App\Http\Controllers\PesmaIzvodjacController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/users',[UserController::class, 'index']);
Route::get('/pesme/izvodjac/{id}',[PesmaIzvodjacController::class, 'index']);

//Route::post('/register',[UserController::class, 'store']);
Route::post('/zanr',[ZanrController::class, 'store']);

Route::resource('izvodjaci',IzvodjacController::class);
Route::resource('pesme',PesmaController::class,);



