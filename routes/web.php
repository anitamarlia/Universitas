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

Route::get('/sports', [App\Http\Controllers\UniversitasController::class, 'index']);
Route::get('/log-greetings', [App\Http\Controllers\UniversitasController::class, 'logGreetings']);

Route::get('/anita', function() {
    return App\Anita::capitalize('anita marlia'); // result => My Name Is Name
});

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});
