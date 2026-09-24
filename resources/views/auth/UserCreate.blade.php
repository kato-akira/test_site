<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>新規アカウント登録</title>
    <style>
        body { font-family: sans-serif; margin: 20px; }
        .form-group { margin-bottom: 15px; }
        label { display: block; margin-bottom: 5px; }
        input { width: 100%; max-width: 400px; padding: 8px; box-sizing: border-box; }
        button { padding: 8px 16px; background: #28a745; color: #fff; border: none; cursor: pointer; }
    </style>
</head>
<body>
    <h1>新規アカウント登録</h1>

    {{-- バリデーションエラーがある場合の表示 --}}
    @if ($errors->any())
        <div style="color: red; margin-bottom: 15px;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- 登録フォーム --}}
    <form action="{{ route('store') }}" method="POST">
        @csrf
        
        <div class="form-group">
            <label for="name">名前</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}" required>
        </div>

        <div class="form-group">
            <label for="email">メールアドレス</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}" required>
        </div>

        <div class="form-group">
            <label for="password">パスワード</label>
            <input type="password" id="password" name="password" required>
        </div>

        <button type="submit">登録する</button>
    </form>

    <p style="margin-top: 20px;">
        <a href="{{ route('UserList') }}">戻る</a>
    </p>
</body>
</html>