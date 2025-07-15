<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\TodoController;

Route::middleware('auth.basic')->group(function () {
    Route::get('/users', [UserController::class, 'index']);
    Route::get('/posts', [PostController::class, 'index']);
    Route::get('/comments', [CommentController::class, 'index']);
    Route::get('/albums', [AlbumController::class, 'index']);
    Route::get('/photos', [PhotoController::class, 'index']);
    Route::get('/todos', [TodoController::class, 'index']);
});