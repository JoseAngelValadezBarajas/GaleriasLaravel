<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImagenController;

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

Route::get('/App', function () {
    return view('app');
});

Route::get('/SubmitImage/AdminPlace', function () {
    return view('SubmitImageAdminPlace');
});

Route::get('imagen/create', [ImagenController::class, 'create'])->name('imagen.create');
Route::post('imagen/store', [ImagenController::class, 'store'])->name('imagen.store');
Route::get('imagen', [ImagenController::class, 'index'])->name('imagen.index');
