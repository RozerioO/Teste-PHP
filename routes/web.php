<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index']);

Route::get('/posts',[\App\Http\Controllers\PostsController::class,'index']);
Route::get('/posts/newpost', [\App\Http\Controllers\PostsController::class,'create'])->middleware('auth');
Route::post('/posts/create',[\App\Http\Controllers\PostsController::class,'store'])->middleware('auth');
Route::delete('/posts/delete',[\App\Http\Controllers\PostsController::class,'destroy'])->middleware('auth');

Route::get('posts/{id}/edit', [\App\Http\Controllers\PostsController::class,'show'])->middleware('auth');
Route::post('posts/{id}/save', [\App\Http\Controllers\PostsController::class,'edit'])->middleware('auth');

Route::get('/user',[\App\Http\Controllers\UserController::class,'index'])->middleware('auth');
Route::post('/user/{id}/edit',[\App\Http\Controllers\UserController::class,'show'])->middleware('auth');
Route::post('/user/{id}/save',[\App\Http\Controllers\UserController::class,'edit'])->middleware('auth');
Route::delete('/user/delete',[\App\Http\Controllers\UserController::class,'destroy'])->middleware('auth');

Route::get('/category',[\App\Http\Controllers\CategoryController::class,'index']);
Route::post('/category/create',[\App\Http\Controllers\CategoryController::class,'store'])->middleware('auth');
Route::post('/category/delete',[\App\Http\Controllers\CategoryController::class,'destroy'])->middleware('auth');
Route::post('/category/{id}/edit',[\App\Http\Controllers\CategoryController::class,'show'])->middleware('auth');
Route::post('/category/{id}/save',[\App\Http\Controllers\CategoryController::class,'edit'])->middleware('auth');


Route::get('/login',[\App\Http\Controllers\LoginController::class,'index']);
Route::post('/login',[\App\Http\Controllers\LoginController::class,'login']);

Route::get('/register',[\App\Http\Controllers\RegisterController::class,'index']);
Route::post('/register',[\App\Http\Controllers\RegisterController::class,'store']);

Route::get('/logout', function ()
{
    \Illuminate\Support\Facades\Auth::logout();
     return redirect('/login');
}
);
