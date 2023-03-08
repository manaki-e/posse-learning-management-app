<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('languages')->insert([
            [
                'language' => 'HTML',
            ], [
                'language' => 'CSS',
            ], [
                'language' => 'JavaScript',
            ], [
                'language' => 'PHP',
            ], [
                'language' => 'laravel',
            ], [
                'language' => 'CSS',
            ], [
                'language' => 'MySQL',
            ], [
                'language' => 'React',
            ], [
                'language' => 'TypeScript',
            ], [
                'language' => 'Python',
            ], [
                'language' => 'Git',
            ], [
                'language' => 'Docker',
            ]
        ]);
    }
}
