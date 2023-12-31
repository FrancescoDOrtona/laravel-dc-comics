<?php

use App\Http\Controllers\ComicController;
use App\Models\Comic;
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

Route::get('/', [ComicController::class, 'index'])
    ->name('comics.index');

Route::get('/comics/create', [ComicController::class, 'create'])
    ->name('comics.create');

Route::get('/comics/{id}', [ComicController::class, 'show'])
    ->name('comics.show');

Route::post('/comics/store', [ComicController::class, 'store'])
    ->name('comics.store');

Route::get('/comics/{id}/edit', [ComicController::class,'edit'])
    ->name('comics.edit');

Route::put('/comics/{id}', [ComicController::class, 'update'])
    ->name('comics.update');

Route::delete('/comics/{id}', [ComicController::class,'destroy'])
    ->name('comics.destroy');