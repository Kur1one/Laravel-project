<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "price" => $this->faker->text(10),
            "order" => $this->faker->text(100),
            "email" => $this->faker->safeEmail(),
        ];
    }
}
