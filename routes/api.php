<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/post',[\App\Http\Controllers\APIController::class,'index']);

Route::get('/category/{id}', [\App\Http\Controllers\APIController::class, 'category']);
