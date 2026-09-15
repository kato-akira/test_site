<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController; // 追加

Route::get('/', function () {
    return view('index');
});

// UserControllerのindexアクションを呼び出す
Route::get('/', [UserController::class, 'index']);