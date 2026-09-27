<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Log;

class UserListController extends Controller
{
    public function index()
    {
        // users テーブルの全レコードを取得
        $users = User::UserList(); 

        return view('auth.UserList', compact('users'));
    }
}
