<?php

namespace App\Http\Controllers;

use App\Models\User; // ① Userモデルをインポート
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        // ② usersテーブルから全件取得（登録順）
        $users = User::all();

        // ※ 新しい順で取得したい場合はこちら:
        // $users = User::latest()->get();

        // ③ resources/views/index.blade.php へ変数 $users を渡す
        return view('index', compact('users'));
    }
}