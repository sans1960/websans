<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\Admin\ImageController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\PortfolioController;

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

Route::get('/', [FrontController::class,'index'])->name('index');
Route::get('/portfolio',[FrontController::class,'portfolio'])->name('portfolio');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
Route::resource('admin/portfolio',PortfolioController::class)->middleware('auth')->names('admin.portfolio');
Route::resource('admin/galleries',GalleryController::class)->middleware('auth')->names('admin.galeries');
Route::resource('admin/images',ImageController::class)->middleware('auth')->names('admin.images');

require __DIR__.'/auth.php';
