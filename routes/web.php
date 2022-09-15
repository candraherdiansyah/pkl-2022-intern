<?php

use App\Http\Controllers\CastingController;
use App\Http\Controllers\DurasiFilmController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\ReviewerController;
use App\Http\Controllers\TahunRilisController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('about', [MyController::class, 'about']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// route admin
Route::group(['prefix' => 'admin',
    'middleware' => ['auth', 'isAdmin']], function () {
    Route::get('/', function () {
        return view('admin.index');
    });

    Route::resource('genre', GenreController::class);
    Route::resource('durasi_film', DurasiFilmController::class);
    Route::resource('movie', MovieController::class);
    Route::resource('reviewer', ReviewerController::class);
    Route::resource('tahun_rilis', TahunRilisController::class);
    Route::resource('casting', CastingController::class);

});

Route::get('/errors', function () {
    return view('errors.403');
});
