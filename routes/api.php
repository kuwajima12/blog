<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\DataController;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


//記事一覧
Route::get('/Article_data', [DataController::class, 'getData']);

//記事詳細
Route::get('/Article_data/{id}', [DataController::class,'shousai']);

//記事に対するコメント一覧
Route::get('/Article_data/comment/{id}', [DataController::class,'comment']);
