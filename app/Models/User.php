<?php

namespace App\Models;

// ① Authenticatable をインポート
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class User extends Authenticatable
{
    use Notifiable,HasFactory;

    // 保存先のテーブルを指定
    protected $table = 'users';

    // 一括代入を許可するカラム
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    // パスワードなどはハッシュ化等のため非表示にすることが多いです
    protected $hidden = [
        'password',
        'remember_token',
    ];
}