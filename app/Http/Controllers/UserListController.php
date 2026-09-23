<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use Illuminate\Support\Facades\Log;

class UserListController extends Controller
{
    public function index()
    {
        // users テーブルの全レコードを取得
        $users = Users::all(); 

        // ビューにデータを渡して返す
        // dd($users);

        return view('auth.UserList', compact('users'));
    }
}
