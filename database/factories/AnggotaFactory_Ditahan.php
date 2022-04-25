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
            'nama' => $this->faker->name,
            'nama_panggilan' => $this->faker->name(mt_rand(2, 7)),
            'jenis_kelamin' => $this->faker->randomElement('Laki-laki', 'Perempuan'),
            'tempat_lahir' => $this->faker->city,
            'tanggal_lahir' => $this->faker->date,
            'nama_ibu' => $this->faker->name,
            'telepon_seluler' => $this->faker->randomElement(['085236639572', '081331289350']),
            'telepon_rumah' => $this->faker->randomElement(['085236639572', '081331289350']),
            'telepon_kantor' => $this->faker->randomElement(['085236639572', '081331289350']),
        ];
    }
}
