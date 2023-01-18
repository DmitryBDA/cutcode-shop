<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Brand>
 */
class BrandFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name = $this->faker->name(rand(5,10));
        $description = $this->faker->realText(rand(1000, 2000));

        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'description' => $description,
        ];
    }
}
