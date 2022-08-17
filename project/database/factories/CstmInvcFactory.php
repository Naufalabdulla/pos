<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CstmInvcFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'outlet' => $this->faker->word(),
            'number' => $this->faker->randomDigit(),
            'order_id' => mt_rand(1,2)
        ];
    }
}
