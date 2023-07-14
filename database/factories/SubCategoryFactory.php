<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SubCategoryFactory extends Factory
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
            'slug' => $this->faker->name,
            'status' => $this->faker->numberBetween(0,1),
            'category_id' => $this->faker->numberBetween(1,30),
        ];

    }
}
