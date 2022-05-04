<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class IdentityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'type_identitas' => $this->faker->randomElement(['KTP', 'KK']),
        ];
    }
}
