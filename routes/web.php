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

/*Route::get('/', function () {
    return view('welcome');
});*/

use App\Http\Controllers\WelcomeController;

//Route::get('/hello', [WelcomeController::class,'hello']);
//Route::get('/', [WelcomeController::class, 'index']); // Menampilkan "Welcome" Message
//Route::get('/about', [WelcomeController::class, 'about']); // Menampilkan Nama dan NIM
//Route::get('/articles/{id}', [WelcomeController::class, 'articles']); // Menampilkan artikel dengan ID dari URL

use App\Http\Controllers\PhotoController;

Route::resource('photos', PhotoController::class)
    ->only([ 'index', 'show'
]);

Route::resource('photos', PhotoController::class)
    ->except([ 'create', 'store', 'update', 'destroy'
]);

Route::get('/greeting', [WelcomeController::class, 'greeting']);