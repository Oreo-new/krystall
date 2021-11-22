<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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
Route::get('/' , [ PageController::class , 'homepage' ] )->name('homepage');
Route::get('/alfabetisk' , [ PageController::class , 'alfabetisk' ] )->name('alfabetisk');
Route::get('/alfabetisk/spakoner' , [ PageController::class , 'spakoner' ] )->name('spakoner');
Route::get('/horoskops' , [ PageController::class , 'horoskops' ] )->name('horoskops');
Route::get('/horoskops/horoskop' , [ PageController::class , 'horoskop' ] )->name('horoskop');