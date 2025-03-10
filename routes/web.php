<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Auth;


Route::get('/', function () {
    return view('landing');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// post routes
Route::post('/createpost', [App\Http\Controllers\PostController::class, 'create'])->name('createpost');
Route::get('/deletepost/{id}', [App\Http\Controllers\PostController::class, 'delete'])->name('deletepost');


//comment routes
Route::post('/creatcommment', [App\Http\Controllers\CommentController::class, 'create'])->name('createcomment');
