<?php

namespace Database\Factories;

use App\Tools\Helper;
use Illuminate\Database\Eloquent\Factories\Factory;

class BrandFactory extends Factory
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
            'name' => $name,
            'code' => Helper::translitString($name),
            'description' => $this->faker->realText(rand(150, 200)),
        ];
    }
}
