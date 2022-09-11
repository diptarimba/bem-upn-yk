<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\HomeController;
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

Route::get('/fill', [HomeController::class, 'index'])->name('message.fill');
Route::get('/message/{id}', [HomeController::class, 'messageView'])->name('message.view');
Route::post('/message', [HomeController::class, 'store'])->name('message.store');
Route::get('/message', [HomeController::class, 'messageList'])->name('message.index');

// Library
Route::resource('library', BookController::class);
