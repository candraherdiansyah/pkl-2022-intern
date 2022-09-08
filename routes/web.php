<?php

use App\Http\Controllers\MyController;

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
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('about', [MyController::class, 'about']);

// tes model
Route::get('data-post', function () {
    $query = \App\Models\Post::all();
    return $query;
});

// Route::get('data-faris',function(){
//     $query = \App\Models\Faridz::all();
//     return $query;
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'isAdmin']], function () {
    Route::get('profile', function () {
        return view('profile');
    });
});

Route::get('/errors', function () {
    return view('404');
});
