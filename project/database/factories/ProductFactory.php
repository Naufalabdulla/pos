<?php

namespace Database\Factories;

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
        return [
            'name' => $this->faker->word(),
            'model' => $this->faker->word(),
            'color' => $this->faker->colorName(),
            'price' => $this->faker->randomDigit(),
            'category_id' => mt_rand(1,3),
            'inventory_id' => mt_rand(1,2),
        ];
    }
}
