<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostsController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix'=>'category'], function () {
    Route::get('/index',[CategoryController::class, 'index'])->name('category.index');
    Route::get('/create',[CategoryController::class, 'create'])->name('category.create');
    Route::post('/store',[CategoryController::class, 'store'])->name('category.store');
    Route::get('/edit/{id}',[CategoryController::class, 'edit'])->name('category.edit');
    Route::get('/delete/{id}',[CategoryController::class, 'destroy'])->name('category.delete');
    Route::post('/update/{id}',[CategoryController::class, 'update'])->name('category.update');
});

Route::group(['prefix' => 'post'], function () {
    Route::get('/index',[PostsController::class, 'index'])->name('post.index');
    Route::get('/create',[PostsController::class, 'create'])->name('post.create');
    Route::post('/store',[PostsController::class, 'store'])->name('post.store');
    Route::get('/edit/{id}',[PostsController::class, 'edit'])->name('post.edit');
    Route::get('/delete/{id}',[PostsController::class, 'destroy'])->name('post.delete');
    Route::post('/update/{id}',[PostsController::class, 'update'])->name('post.update');
});