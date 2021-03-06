<?php

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

Route::get('/', [\App\Http\Controllers\MainController::class, 'index'])->name('home');
Route::get('/poems/category/{slug}', [\App\Http\Controllers\PoemController::class, 'showCategory'])->name('poems.category');
Route::get('/poems/{slug}', [\App\Http\Controllers\PoemController::class, 'show'])->name('poems.show');

Route::prefix('admin')->namespace('\App\Http\Controllers\Admin')->name('admin.')->group(function () {
    Route::get('/', 'MainController@index')->name('index');
    Route::resource('/poem_categories', 'PoemCategoryController');
    Route::resource('/poems', 'PoemController');
    Route::resource('/posts', 'PostController');
});
