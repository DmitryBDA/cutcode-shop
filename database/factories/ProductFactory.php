<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    protected $model = Product::class;
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
            'category_id' => rand(1, 10),
            'active' => true,
            'name' => $name,
            'slug' => Str::slug($name),
            'description' => $description,
            'price' => rand(1000, 10000),
            'show_main' => true,
        ];
    }
}
