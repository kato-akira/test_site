<?php

namespace App\Http\Controllers;

use App\Models\Users; // ① Userモデルをインポート
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function destroy($id)
        {
            // 1. データベースから該当のユーザーを見つけて削除
            $user = Users::findOrFail($id);
            $user->delete();

            // 2. 削除完了後、一覧画面などにリダイレクト
            return redirect()->route('UserList')->with('success', 'アカウントを削除しました。');
        }

    public function create()
        {
            return view('auth.UserCreate'); // resources/views/users/create.blade.php を表示
        }

    // ② 入力されたデータをデータベースに保存
    public function store(Request $request)
    {
        // バリデーション（必要に応じて項目名やルールを調整してください）
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);

        // データの保存
        Users::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password), // パスワードはハッシュ化して保存
        ]);

        // 保存完了後、一覧やトップへリダイレクト
        return redirect()->route('UserList')->with('success', 'アカウントを新規登録しました。');
    }

}