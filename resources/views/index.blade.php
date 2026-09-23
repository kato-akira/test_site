<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>トップページ</title>
</head>
<body>
    <div class="container">
        <p>トップページ</p>
        
        <!-- route('register') を使って /register へ遷移するボタン -->
        <a href="{{ route('UserList') }}">アカウント　管理</a>
    </div>
</body>
</html>