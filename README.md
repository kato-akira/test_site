環境構築手順

1.コンテナ構築
docker compose up -d --build

2.appコンテナへアクセス
docker compose exec laravel_app bash

3.コンポーサーをインストール
composer install

4.マイグレーション実行
php artisan migrate

5.seeder実行
php artisan db:seeder

6.ローカルホスト表示確認
http://localhost:8080