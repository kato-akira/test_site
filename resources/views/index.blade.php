<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ユーザー一覧</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}?v={{ time() }}">
</head>
<body>
    <main style="max-width: 800px; margin: 2rem auto; padding: 0 1rem;">
        <h2>登録ユーザー一覧</h2>

        <ul>
            @forelse ($users as $user)
                <li>
                    ID: {{ $user->id }} | 
                    <strong>{{ $user->name }}</strong> ({{ $user->email }}) 
                    <small style="color: #666;">- 登録日: {{ $user->created_at->format('Y/m/d H:i') }}</small>
                </li>
            @empty
                <li>登録されているユーザーはいません。</li>
            @endforelse
        </ul>
    </main>
</body>
</html>