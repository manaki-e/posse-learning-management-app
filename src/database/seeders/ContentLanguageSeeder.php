<?php

namespace Database\Seeders;

use App\Models\ContentLanguage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContentLanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ContentLanguage::factory()->count(50)->create();
    }
}
