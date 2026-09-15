<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>マイショップ | トップページ</title>

    <!-- 検索エンジン・表示設定 -->
    <meta name="description" content="Laravelで作成したシンプルなWebアプリケーションです。">
    
    <!-- CSRFトークン (フォーム通信用) -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- CSSの読み込み (public/css/style.css) -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <!-- ヘッダーエリア -->
    <header>
        <div class="header-container">
            <h1 class="logo">My Store</h1>
            <nav class="nav-menu">
                <a href="#">ホーム</a>
                <a href="#">商品一覧</a>
                <a href="#">ログイン</a>
            </nav>
        </div>
    </header>

    <!-- メインコンテンツ -->
    <main>
        <section class="hero">
            <h2>ようこそ My Store へ</h2>
            <p>シンプルな設計で使いやすいWebサービスを提供します。</p>
        </section>

        <section class="content">
            <h3>お知らせ</h3>
            <p>只今サイトの公開準備中です。</p>
        </section>
    </main>

    <!-- フッターエリア -->
    <footer>
        <p>&copy; {{ date('Y') }} My Store. All rights reserved.</p>
    </footer>

</body>
</html>