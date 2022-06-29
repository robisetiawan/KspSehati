<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProfessionFactory extends Factory
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
            'pekerjaan' => $this->faker->randomElement(['Petani', 'Pedagang', 'Pengusaha']),
            'lama_kerja_tahun' => $this->faker->randomDigitNotNull(),
            'lama_kerja_bulan' => $this->faker->randomDigitNotNull(),
            'tanggungan' => $this->faker->numberBetween(1, 3),
            'omset_dagang' => '500000',
            'pendapatan' => '1000000',
            'gaji' => '1000000',
            'pendapatan_psg' => '1000000',
            'pendapatan_lain' => '500000',
            'biaya_bulanan' => '1000000'


        ];
    }
}
