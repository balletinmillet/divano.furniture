<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SkuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'product_id' => rand(1, 12),
            'count' => rand(0, 15),
            'price' => rand(1000, 50000),
        ];
    }
}
