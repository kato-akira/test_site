<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserListController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LoginController;

// ログイン画面
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
// ログイン処理
Route::post('/login', [LoginController::class, 'login']);
// ログアウト処理
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    // middleware('auth')でグループ化したルートは、未ログイン状態でブロックされる。おもしろい
    Route::get('/', function () {
        return view('index');
    })->name('top');

    // アカウント一覧表示
    Route::get('/UserList', [UserListController::class, 'index']) ->name("UserList");

    // アカウント追加・削除
    Route::prefix('UserList')
        ->controller(UserController::class)
        ->group(function(){
            Route::delete('/{id}','destroy')->name('UserDestroy');
            Route::get('/create','create')->name('create');
            Route::post('/','store')->name('store');
    });
});

