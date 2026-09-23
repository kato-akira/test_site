<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserRegisterController;
use App\Http\Controllers\UserListController;

Route::get('/', function () {
    return view('index');
})->name('top');

Route::get('/UserList', [UserListController::class, 'index']) ->name("UserList");

// 画面表示（GET）
Route::get('/UserRegistration', [UserRegisterController::class, 'create']) ->name("UserRegistration");

// // 登録処理（POST）
Route::post('/UserRegistration', [UserRegisterController::class, 'store']);