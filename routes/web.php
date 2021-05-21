<?php

use Illuminate\Support\Facades\Route;

use \App\Http\Controllers\Backend\PostController;
use \App\Http\Controllers\PageController;


Route::view('/', 'welcome');

Route::get('/posts', [PageController::class, 'posts'])
    ->name('posts')
    ->middleware('auth');

Route::get('blog/{post:slug}', [PageController::class, 'post'])
    ->name('post');

Route::view('/dashboard', 'dashboard')
    ->name('dashboard');

Route::resource('post', PostController::class)
    ->middleware('auth')
    ->except('show');


require __DIR__.'/auth.php';
