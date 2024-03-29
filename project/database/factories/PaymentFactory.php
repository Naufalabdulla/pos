<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PaymentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'type' => $this->faker->boolean(),
            'count' => $this->faker->randomDigit(),
            'amount' => $this->faker->randomDigit(),
            'MDR' => $this->faker->randomDigit(),
            'NETT' => $this->faker->randomDigit()
        ];
    }
}
