<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Anggota;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Robi Setiawan',
            'email' => 'robi@gmail.com',
            'password' => bcrypt('12345')
        ]);
        User::create([
            'name' => 'Randi',
            'email' => 'randis@gmail.com',
            'password' => bcrypt('12345')
        ]);

        Anggota::factory(5)->create();
    }
}
