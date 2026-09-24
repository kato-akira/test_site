<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserListController;
use App\Http\Controllers\UserController;

// トップページ
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