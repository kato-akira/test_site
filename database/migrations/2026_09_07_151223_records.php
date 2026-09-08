<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('records', function (Blueprint $table) {
            $table->id();
            // categoriesテーブルのidと紐づく外部キー（親データ削除時に連動して削除）
            // 金額（マイナスなしの正の整数）
            $table->unsignedInteger('amount');
            // 収支の発生日
            $table->date('event_date');
            // メモ・詳細（空欄も許可）
            $table->string('memo', 255)->nullable();
            $table->timestamps();

            // 月別・範囲指定検索を高速化するためのインデックス
            $table->index('event_date');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('records');
    }
};
