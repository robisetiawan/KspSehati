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
            'id' => $this->faker->unique()->numberBetween(20, 40),
            'type_identitas' => $this->faker->randomElement(['KTP', 'SIM', 'Domisili']),
            'no_identitas' => '1234567890123456',
            'warganegara' => 'WNI',
            'agama' => 'Islam',
            'pendidikan' => 'SMA/SMK',
            'status_kawin' => $this->faker->randomElement(['Kawin', 'Belum Kawin', 'Cerai']),
            'gol_darah' => 'A',
            'status_rumah' => $this->faker->randomElement(['Rumah Sendiri', 'Rumah Orang tua', 'Rumah Sewa/Kontrak']),
            'alamat' => $this->faker->address(),
            'rt' => $this->faker->randomNumber(3, true),
            'rw' => $this->faker->randomNumber(3, true),
            'desa_kel' => $this->faker->city,
            'kec' => $this->faker->city,
            'kab_kota' => $this->faker->city,
            'provinsi' => $this->faker->city,
            'kode_pos' => $this->faker->randomNumber(5, true),

        ];
    }
}
