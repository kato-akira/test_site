<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f7;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            background-color: #ffffff;
            margin: 0 auto;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        h1 {
            color: #333333;
            font-size: 22px;
        }
        p {
            color: #555555;
            line-height: 1.6;
        }
        .btn {
            display: inline-block;
            padding: 12px 24px;
            margin-top: 20px;
            background-color: #4f46e5; /* インディゴブルーのきれいなボタン */
            color: #ffffff !important;
            text-decoration: none;
            border-radius: 4px;
            font-weight: bold;
        }
        .footer {
            margin-top: 30px;
            font-size: 12px;
            color: #999999;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>ようこそ、{{ $userName }} さん！</h1>
        
        <p>この度は、私たちのサービスにご登録いただき誠にありがとうございます。</p>
        <p>アカウントの準備が完了いたしました。以下のボタンからマイページへログインし、サービスをお楽しみください。</p>

        <a href="{{route('login')}}" class="btn">マイページへログインする</a>

        <div class="footer">
            <p>&copy; 2026 Laravel App All rights reserved.</p>
        </div>
    </div>
</body>
</html>