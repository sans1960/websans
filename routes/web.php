<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\ImageController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\LocationController;
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
Route::get('/galeries',[FrontController::class,'galeries'])->name('galeries');
Route::get('/galeries/{gallery}',[FrontController::class,'gallery'])->name('imagesgallery');
Route::get('/posts',[FrontController::class,'allPosts'])->name('blog');
Route::get('/posts/{post}',[FrontController::class,'viewPost'])->name('post');
Route::get('/locations',[FrontController::class,'allLocations'])->name('locations');
Route::get('/locations/{location}',[FrontController::class,'viewLocation'])->name('viewlocation');
Route::get('/movies',[MovieController::class,'index'])->name('movies');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
Route::resource('admin/portfolio',PortfolioController::class)->middleware('auth')->names('admin.portfolio');
Route::resource('admin/galleries',GalleryController::class)->middleware('auth')->names('admin.galeries');
Route::resource('admin/images',ImageController::class)->middleware('auth')->names('admin.images');
Route::resource('admin/tags',TagController::class)->middleware('auth')->names('admin.tags');
Route::resource('admin/posts',PostController::class)->middleware('auth')->names('admin.posts');
Route::resource('admin/locations',LocationController::class)->middleware('auth')->names('admin.locations');


require __DIR__.'/auth.php';
