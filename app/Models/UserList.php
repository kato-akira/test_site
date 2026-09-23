<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserList extends Model
{
    // ① 保存先テーブル名を指定（usersテーブルに保存する場合）
    protected $table = 'users';
}
