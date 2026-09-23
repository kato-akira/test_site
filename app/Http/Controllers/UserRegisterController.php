<?php

namespace App\Http\Controllers;

use App\Models\Users; // カスタムモデルを読み込み
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash; // パスワードハッシュ化用

class UserRegisterController extends Controller
{
    /**
     * 登録画面を表示
     */
    public function create()
    {
        return view('auth.UserRegistration');
    }

    /**
     * 登録処理を実行
     */
    public function store(Request $request)
    {
        // 入力チェック
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        // aaa モデルを使ってデータベースに追加
        Users::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']), // 手動ハッシュ化
        ]);

        // 完了後にリダイレクト
        return redirect('/')->with('status', 'ユーザー登録が完了しました！');
    }
}