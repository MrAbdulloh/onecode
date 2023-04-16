<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('posts', [PostController::class, 'index'])->name('post.index');
Route::get('posts/create', [PostController::class, 'create'])->name('post.create');
Route::get('posts/create', [PostController::class, 'create'])->name('post.create');
Route::get('posts/{post}', [PostController::class, 'show'])->name('post.show');
Route::post('posts', [PostController::class, 'store'])->name('post.store');
Route::get('posts/edit/{post}', [PostController::class, 'edit'])->name('post.edit');
Route::put('posts/{post}', [PostController::class, 'update'])->name('post.update');
Route::delete('posts/{post}', [PostController::class, 'delete'])->name('post.delete');

