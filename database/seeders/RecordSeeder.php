<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // ★ DBファサードを読み込む
use Carbon\Carbon;

class RecordSeeder extends Seeder
{
    public function run(): void
    {
        $memos = ['スーパーで買い物', 'コンビニ', 'ドラッグストア', 'カフェ代', '定期券購入', '今月の給与', '日用品購入', null];
        $records = [];
        $now = Carbon::now();

        for ($i = 0; $i < 50; $i++) {
            $records[] = [
                'amount'     => rand(300, 15000),
                'event_date' => $now->copy()->subDays(rand(0, 30))->format('Y-m-d'),
                'memo'       => $memos[array_rand($memos)],
                'created_at' => $now,
                'updated_at' => $now,
            ];
        }

        // ★ モデルを使わず、テーブル名を直接指定してインサートする
        // ここを修正
        DB::table('records')->insert($records);
    }
}