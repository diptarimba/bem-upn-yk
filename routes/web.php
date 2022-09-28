<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MessageController;
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

Route::get('/', function(){
    return redirect()->route('message.create');
});

Route::get('/auth-login', [LoginController::class, 'index'])->name('login.index');
Route::post('/auth-login', [LoginController::class, 'login'])->name('login.post');

Route::get('/message', [MessageController::class, 'create'])->name('message.create');
Route::post('/message', [MessageController::class, 'store'])->name('message.store');

// Library
Route::resource('library', BookController::class)->only('index');

Route::group(['middleware' => ['auth:web'], 'prefix' => 'admin', 'as' => 'admin.'], function(){
    Route::get('/message', [MessageController::class, 'index'])->name('message.index');
    Route::get('/message/{id}', [MessageController::class, 'edit'])->name('message.edit');

    Route::resource('library', BookController::class);

    Route::get('/auth-logout', [LoginController::class, 'logout'])->name('logout');
});
