<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AnggotaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->numberBetween(1, 20),
            'identity_id' => $this->faker->numberBetween(1, 1),
            'profession_id' => $this->faker->numberBetween(1, 1),
            'adddata_id' => $this->faker->numberBetween(1, 1),
            'nama_panggilan' => $this->faker->name(mt_rand(2, 7)),
            'jenis_kelamin' => $this->faker->randomElement(['Laki-laki', 'Perempuan']),
            'tempat_lahir' => $this->faker->city,
            'tanggal_lahir' => $this->faker->date,
            'nama_ibu' => $this->faker->name,
            'telepon_seluler' => $this->faker->randomElement(['085236639572', '081331289350']),
            'telepon_rumah' => $this->faker->randomElement(['085236639572', '081331289350']),
            'telepon_kantor' => $this->faker->randomElement(['085236639572', '081331289350']),
        ];
    }
}
