<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {

        $this->call([
            RecordSeeder::class, // ★ ここを RecordSeeder に書き換えます
        ]);
    }
}