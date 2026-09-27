<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class WelcomeMail extends Mailable
{
    use Queueable, SerializesModels;

    // ビューに渡したいデータ（例：ユーザー名）
    public $userName;

    public function __construct($userName)
    {
        $this->userName = $userName;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: '【サービス名】ご登録ありがとうございます！',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.welcome', // resources/views/emails/welcome.blade.php を指定
        );
    }
}