<?php

use App\Http\Controllers\Film;
use Illuminate\Support\Facades\Route;

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

Route::controller(Film::class)->group(function () {
    Route::get('/film/index', 'index');
    Route::get('/film/tambah', 'tambah');
    Route::post('/film/simpan', 'simpan');
    Route::get('/film/edit/{id_film}', 'edit');
    Route::put('/film/simpan_edit','simpan_edit');
    Route::delete('/film/hapus/{id_film}','hapus');

});