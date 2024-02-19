<?php

use App\Http\Controllers\CastController;
use App\Http\Controllers\GenreController;
use Illuminate\Routing\Route as RoutingRoute;
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

Route::controller(GenreController::class)->group(function () {
    Route::get('/genre', 'index')->name('genre.index');
    Route::get('/genre/create', 'create')->name('genre.create');
    Route::post('/genre', 'store')->name('genre.store');
    Route::get('/genre/{genre}/edit', 'edit')->name('genre.edit');
    Route::put('/genre/{genre}', 'update')->name('genre.update');
    Route::delete('/genre/{id}', 'destroy')->name('genre.destroy');
});
Route::view('/template','template.master');

Route::resource('/cast', CastController::class);