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
            'name' => $this->faker->name,
            'description' => $this->faker->text(30),
            'price' => $this->faker->numberBetween(1,999),
            'oprice' => $this->faker->numberBetween(1,999),
            'categories_id' => $this->faker->numberBetween(1,30),
            'subcategories_id' => $this->faker->numberBetween(1,30),
            'brand_id' => $this->faker->numberBetween(1,30),
        ];
    }
}
