<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

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
    return view('welcome' );
})->name('welcome');

Route::get('about', function () {
    return view('about' );
})->name('about');

Route::get('home', function () {
    return view('home' );
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::middleware('auth')->group(function() {
    Route::resource('article', ArticleController::class);
    Route::resource('profile', ArticleController::class);
});

require __DIR__.'/auth.php';

