<?php

use App\Http\Controllers\DataController;
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
    return redirect()->route('data.index');
});

Route::get('/data', [DataController::class, 'index'])->name('data.index');
Route::get('/data/create', [DataController::class, 'create'])->name('data.create');
Route::post('/data/store', [DataController::class, 'store'])->name('data.store');
Route::get('/data/{id}/edit', [DataController::class, 'edit'])->name('data.edit');
Route::get('/data/{id}/show', [DataController::class, 'show'])->name('data.show');
Route::get('/data/{id}/delete', [DataController::class, 'destroy'])->name('data.delete');
Route::post('/data/{id}/update', [DataController::class, 'update'])->name('data.update');