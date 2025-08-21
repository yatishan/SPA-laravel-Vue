<?php

use App\Http\Controllers\ProductContoller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/product',[ProductContoller::class,'index']);
Route::post('/product',[ProductContoller::class,'store']);
Route::get('/product/{id}',[ProductContoller::class,'show']);
Route::put('/product/{id}',[ProductContoller::class,'update']);
Route::delete('/product/{id}',[ProductContoller::class,'destroy']);




