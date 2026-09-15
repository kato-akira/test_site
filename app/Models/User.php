<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * モデルが参照するテーブル名を明示的に指定
     */
    protected $table = 'users';

    /**
     * 一括割り当て（createやupdate）を許可する属性
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * 配列やJSONに含めない隠蔽する属性（パスワードなど）
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * 型キャストの定義
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed', // パスワードを自動ハッシュ化
        ];
    }
}