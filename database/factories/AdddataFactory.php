<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AdddataFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id' => $this->faker->unique()->numberBetween(20, 40),
            'nama' => $this->faker->name(mt_rand(2, 7)),
            'alamat_add' => $this->faker->address(),
            'rt_add' => $this->faker->randomNumber(3, true),
            'rw_add' => $this->faker->randomNumber(3, true),
            'desa_kel_add' => $this->faker->city,
            'kec_add' => $this->faker->city,
            'kab_kota_add' => $this->faker->city,
            'provinsi_add' => $this->faker->city,
            'kode_pos_add' => $this->faker->randomNumber(5, true),
            'telepon_seluler_add' => $this->faker->randomElement(['085236639572', '081331289350']),
            'telepon_rumah_add' => $this->faker->randomElement(['085236639572', '081331289350']),
            'created_at' => $this->faker->dateTimeInInterval('-6 week', '+3 days')
        ];
    }
}
