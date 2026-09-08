<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>タスク管理 (MVC)</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <h1>タスク管理</h1>

    <!-- 新規作成フォーム -->
    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf
        <input type="text" name="title" placeholder="新しいタスクを入力" required>
        <button type="submit">追加</button>
    </form>

    <hr>

    <!-- タスク一覧 -->
    <ul>
        @forelse($tasks as $task)
            <li class="task-item">
                <!-- ステータストグル -->
                <form action="{{ route('tasks.toggle', $task->id) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <button type="submit">
                        {{ $task->is_completed ? '✅ 完了' : '🔲 未完了' }}
                    </button>
                </form>

                <!-- タイトル -->
                <span class="{{ $task->is_completed ? 'completed' : '' }}">
                    {{ $task->title }}
                </span>

                <!-- 削除 -->
                <form action="{{ route('tasks.destroy', $task->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('本当に削除しますか？')">削除</button>
                </form>
            </li>
        @empty
            <li>タスクはありません。</li>
        @endforelse
    </ul>
</body>
</html>