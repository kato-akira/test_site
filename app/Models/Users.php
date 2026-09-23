<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    // ① 保存先テーブル名を指定（usersテーブルに保存する場合）
    protected $table = 'users';

    // ② 一括保存（create）を許可する項目を指定
    protected $fillable = [
        'name',
        'email',
        'password',
    ];
}