<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\TitleController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\ListitemController;

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
    return view('index', ['titles' => TitleController::allTitles(),
                          'genres' => GenreController::allGenres()]);
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::resource('reviews', ReviewController::class);

Route::resource('title', TitleController::class);

Route::resource('listing', ListingController::class);

Route::resource('listitem', ListitemController::class);

Route::put('/user/{id}/permit', [UserController::class, 'permit']);

Route::resource('user', UserController::class);

Route::get('/roles', [RoleController::class, 'index']);

Route::resource('genre', GenreController::class);

Route::resource('review', ReviewController::class);

Route::get('/dashboard', function () {
    return view('dashboard', ['titles'   => TitleController::allTitles(),
                              'users'    => UserController::allUsers(),
                              'listings' => ListingController::allListings(),
                              'reviews'  => ReviewController::allReviews()]);
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
