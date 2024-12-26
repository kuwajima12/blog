<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\articlesController;
use App\Http\Controllers\comentController;



//ログイン画面の表示とログイン処理
Route::get('/', [UsersController::class, 'index'])->name('login.index');

Route::post('/', [UsersController::class, 'login']);
//Route::get('/articles', [articlesController::class, 'index'])->name('articles.tes');

//ログアウト処理
Route::get('/articles/logout', [articlesController::class, 'logout'])->name('articles.logout');

//記事詳細の表示
Route::get('/articles_shousai', [articlesController::class, 'index'])->name('kiji.index');
Route::get('/articles_shousai/{id}', [articlesController::class, 'shousai'])->name('kiji.shousai');

//ページネーション
//Route::get('/articles', [articlesController::class, 'Pagenation'])->name('articles.Page');

Route::get('/articles', [ArticleController::class,'Pagenation'])->name('articles.Page');


//コメント投稿ページ表示
Route::get('/coment_post', [comentController::class, 'shousai']);

//コメント投稿ルート、ページ表示
Route::get('/coment/{id}', [comentController::class, 'show'])->name('coment.show');
Route::post('/coment/pos/{id}', [comentController::class, 'store'])->name('coment.store');


//コメント一覧
Route::get('/coment_ichiran/{id}', [comentController::class, 'index'])->name('coments.index');

Route::get('/articles/{id}', [articlesController::class, 'show'])->name('articles.show');


//ページネーション
//Route::get('/page_nation', [PagenationController::class, 'index']);

//記事投稿フォーム
Route::get('/article_post', [articlesController::class, 'show'])->name('articles.post');
Route::post('/article_post', [articlesController::class, 'post']);



?>