<?php

namespace Database\Factories;

use App\Models\Notice;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Notice>
 */
class NoticeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Notice::class;

    public function definition(): array
    {
        return [
            "title" => fake()->paragraph(1),
            "body" => fake()->paragraph(rand(5, 15)),
            "is_published" => fake()->boolean(60),
        ];
    }
}
