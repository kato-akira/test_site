<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>アカウント一覧</title>
    <style>
        /* 見やすくするためのシンプルな枠線スタイル */
        table {
            border-collapse: collapse;
            width: 100%;
            max-width: 800px;
        }
        th, td {
            border: 1px solid #ccc;
            padding: 8px 12px;
            text-align: left;
        }
        th {
            background-color: #f4f4f4;
        }
    </style>
</head>
<body>
    <h1>アカウント一覧</h1>
    <div style="margin-bottom: 20px;">
        <a href="{{ route('create') }}" class="btn btn-primary" style="padding: 6px 12px; background: #007bff; color: #fff; text-decoration: none; border-radius: 4px;">新規登録</a>
    </div>
    <table>
        <thead>
            <tr>
                <th>番号</th>
                <th>名前</th>
                <th>メールアドレス</th>
                <th>操作</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        {{-- actionにルートとユーザーのidを指定 --}}
                        <form action="{{ route('UserDestroy', $user->id) }}" method="POST" onsubmit="return confirm('削除します。よろしいですか？');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">削除</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
<a href="{{ Route('top') }}" class="btn">トップページに戻る</a>
</body>
</html>