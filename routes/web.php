<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\Admin;
use App\Models\Category;
use App\Models\Review;

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
    return view('welcome', [
        'reviews' => Review::with('user')->orderBy('id', 'desc')->paginate(3),
        'categories' => Category::paginate(4),
    ]);
})->name('welcome');

Route::get('about', function () {
    return view('about', [
        'categories' => Category::paginate(4),
    ] );
})->name('about');

Route::middleware('auth')->group(function() {
    Route::resource('article', ArticleController::class);
    Route::resource('user', UserController::class);
    Route::resource('category', CategoryController::class);
    Route::resource('comment', CommentController::class);
    Route::post('review', [ReviewController::class, 'store'])->name('review.store');
});
Route::middleware('auth', 'admin')->group(function() {
    Route::get('admin/article', [ArticleController::class, 'adminarticle'])->name('article.admin');
});

require __DIR__.'/auth.php';

