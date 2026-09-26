<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>カスタムログイン</title>
    <style>
        body { font-family: sans-serif; background: #f4f6f8; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; }
        .login-box { background: white; padding: 30px; border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); width: 300px; }
        .login-box h2 { margin-bottom: 20px; text-align: center; }
        .form-group { margin-bottom: 15px; }
        .form-group label { display: block; margin-bottom: 5px; font-size: 14px; }
        .form-group input { width: 100%; padding: 8px; box-sizing: border-box; border: 1px solid #ccc; border-radius: 4px; }
        .btn { width: 100%; background: #3b82f6; color: white; border: none; padding: 10px; border-radius: 4px; cursor: pointer; font-size: 16px; }
        .btn:hover { background: #2563eb; }
        .error-list { color: red; font-size: 13px; margin-bottom: 15px; }
    </style>
</head>
<body>
    <div class="login-box">
        <h2>ログイン</h2>

        <!-- エラーメッセージ -->
        @if ($errors->any())
            <div class="error-list">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group">
                <label>メールアドレス</label>
                <input type="email" name="email" value="{{ old('email') }}" required autofocus>
            </div>
            <div class="form-group">
                <label>パスワード</label>
                <input type="password" name="password" required>
            </div>
            <button type="submit" class="btn">ログインする</button>
        </form>
    </div>
</body>
</html>