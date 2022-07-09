<?php

namespace Database\Factories;

use App\Tools\Helper;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->realText(rand(10, 20));
        return [
            'category_id' => rand(3, 6),
            'brand_id' => rand(1, 2),
            'name' => $name,
            'code' => Helper::translitString($name),
            'description' => $this->faker->realText(rand(400, 500)),
            'price' => rand(1000, 2000),
        ];
    }
}
