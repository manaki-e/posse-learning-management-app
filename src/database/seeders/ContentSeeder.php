<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contents')->insert(
            [
                [
                    'content' => 'インプット教材（本）',
                ], [
                    'content' => 'インプット教材（Udemy）',
                ], [
                    'content' => 'ドリル課題',
                ], [
                    'content' => 'POSSE課題',
                ], [
                    'content' => 'その他',
                ]
            ]
        );
    }
}
