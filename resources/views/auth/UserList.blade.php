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
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>名前</th>
                <th>メールアドレス</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
<a href="{{ Route('top') }}" class="btn">トップページに戻る</a>
</body>
</html>