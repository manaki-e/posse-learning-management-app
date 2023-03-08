<?php

namespace Database\Factories;

use App\Models\Content;
use App\Models\Language;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ContentLanguage>
 */
class ContentLanguageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $all_content_id = Content::pluck('id')->all();
        $all_language_id = Language::pluck('id')->all();

        return [
            "content_id" => fake()->randomElement($all_content_id),
            "language_id" => fake()->randomElement($all_language_id),
            "hour" => rand(1, 9),
            "date" => fake()->dateTimeBetween($startDate = '-6 weeks', $endDate = 'now'),
        ];
    }
}
