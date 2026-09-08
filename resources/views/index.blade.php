<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>マイオリジナルページ</title>
</head>
<body>
    <h1>家計簿管理システム</h1>
    <p>Docker + Laravel 環境で正常に表示されています。</p>
    <a href="{{ route('tasks.index') }}" class="btn">タスク一覧へ移動する</a>
</body>
</html>