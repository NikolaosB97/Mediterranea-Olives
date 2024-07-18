<?php

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
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ContactController;


Route::get('/prodotti', [ProductController::class, 'index'])->name('products.index');
Route::get('/prodotti/{id}', [ProductController::class, 'show'])->name('products.show');


Route::get('/chi-siamo', [AboutController::class, 'index'])->name('about.index');
use App\Http\Controllers\PallettizzazioneController;

Route::get('/pallettizzazione', [PallettizzazioneController::class, 'index'])->name('pallettizzazione');
Route::get('/contatti', [ContactController::class, 'show'])->name('contact.show');