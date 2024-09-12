<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController;

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
//come secondo parametro al posto della function() tra le quadre scrivo
//[miocontroller::class,'funzioneDelController']
Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/chi-siamo', [PageController::class, 'about'])->name('about');
Route::get('/contatti', [PageController::class, 'contacts'])->name('contacts');
Route::get('/books', [PageController::class, 'books'])->name('books');
Route::get('/badbooks', [PageController::class, 'badBooks'])->name('badbooks');
Route::get('/bookdetail/{id}', [PageController::class, 'bookDetail'])->name('bookdetail');
//PASSAGGI
//CREO IL CONTROLLER
//AGGIUNGO I METODI RELATIVI ALLE ROTTE
//RICHIAMO NELLE ROTTE IL NOME / ecc.., IL NOME DEL CONTROLLER E IL METODO NAME
