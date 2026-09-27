<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeMail; // ← 追加

class MailController extends Controller
{
    public function sendTest()
    {
        // ユーザー名「山田 太郎」をメールに渡して送信
        $userName = '山田 太郎';

        Mail::to('user@example.com')->send(new WelcomeMail($userName));

        return 'デザイン付きのメールを送信しました！Mailpitを確認してください。';
    }
}