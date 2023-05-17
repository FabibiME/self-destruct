<?php

use App\Http\Controllers\NoteController;
use App\Models\Note;
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

Route::resource('', NoteController::class)
    ->only(['index', 'store']);

Route::get('/notes/{uuid}', [NoteController::class, 'show'])->name('notes');

Route::get('/notes/o/{uuid}', [NoteController::class, 'open'])->name('openNote');

Route::get('/error', [NoteController::class, 'error']);