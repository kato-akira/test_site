<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User; // 自作のモデルをインポート

class LoginController extends Controller
{
    // 1. ログイン画面の表示
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // 2. ログイン処理の実行
    public function login(Request $request)
    {
        // 入力値のバリデーション
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // ★重要: 自作の UserList モデル（guard）を使って認証を試みる
        // auth()->guard() を使うことで、どのモデル/テーブルで認証するかを指定できます
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            // ログイン成功時はダッシュボード等へリダイレクト
            return redirect()->intended('/');
        }

        // 失敗時はエラーを返す
        return back()->withErrors([
            'email' => 'メールアドレスまたはパスワードが正しくありません。',
        ])->onlyInput('email');
    }

    // 3. ログアウト処理
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // dd($request->session()->all());

        return redirect('/');
    }
}