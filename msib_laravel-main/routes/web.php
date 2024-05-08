<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TugasController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('posts', [PostController::class, 'index'])->name('posts.index');
Route::get('profiles', [PostController::class, 'profile'])->name('profiles.index');
Route::get('posts/create', [PostController::class, 'create'])->name('posts.create');
Route::get('posts/product', [PostController::class, 'product'])->name('posts.product');
Route::post('posts/store', [PostController::class, 'store'])->name('posts.store');
Route::get('posts/{id}/edit', [PostController::class, 'edit'])->name('posts.edit');
Route::put('posts/{id}/update', [PostController::class, 'update'])->name('posts.update');
Route::delete('posts/{id}/destroy', [PostController::class, 'delete'])->name('posts.destroy');


Route::get('/warung-nusantara', [ProductController::class, 'index']);
Route::get('/warung-nusantara', [ProductController::class, 'index'])->name('landing.index');

// Route::get('/form-request', [UserController::class, 'getForm'])->name('get_form');
// Route::post('/send-request', [UserController::class, 'sendRequest'])->name('send_request');

Route::get('/form-request', [TugasController::class, 'getForm'])->name('get_form');
Route::post('/post-request', [TugasController::class, 'postForm'])->name('post_form');