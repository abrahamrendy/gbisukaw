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

Route::get('/', [App\Http\Controllers\IndexController::class, 'index'])->name('index');
Route::get('/about', [App\Http\Controllers\AboutController::class, 'index'])->name('about');
Route::get('/location', [App\Http\Controllers\LocationController::class, 'index'])->name('location');
Route::get('/online_services', [App\Http\Controllers\OnlineServicesController::class, 'index'])->name('online_services');
Route::get('/articles', [App\Http\Controllers\ArticleController::class, 'index'])->name('articles');
Route::get('/articles/single', [App\Http\Controllers\ArticleController::class, 'single'])->name('article_single');
Route::get('/articles/3s', [App\Http\Controllers\ArticleController::class, 'three_s'])->name('3s');
Route::get('/contact_us', [App\Http\Controllers\ContactUsController::class, 'index'])->name('contact_us');

Auth::routes();

Route::prefix('admin')->group(function () {
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::prefix('index')->group(function () {
        Route::get('/', [App\Http\Controllers\DashboardIndexController::class, 'index'])->name('dashboard_index');
    });
});

