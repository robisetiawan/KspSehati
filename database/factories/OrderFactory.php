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
            'anggota_id' => $this->faker->numberBetween(0, 20),
            'tipe_order' => $this->faker->randomElement(['Retail', 'coming soon']),
            'status' => $this->faker->randomElement(['verify', 'coming soon']),
            'platform' => $this->faker->randomElement(['Konvensional', 'coming soon']),
            'keperluan' => $this->faker->randomElement(['Sendiri', 'coming soon']),
            'catatan' => $this->faker->sentence(),
        ];
    }
}