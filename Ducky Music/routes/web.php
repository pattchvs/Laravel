<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MusicController;

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

Route::get('/',[MusicController::class, 'index'] );

Route::get('dashboard',[MusicController::class, 'dashboard'] );

Route::delete('/musics/{id}', [MusicController::class, 'destroy']);

Route::get('/musics/create',[MusicController::class, 'create'] );
// ->middleware('auth');

Route::post('musics', [MusicController::class, 'store'] );