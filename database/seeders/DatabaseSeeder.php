<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Order;
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

        Anggota::factory(20)->create();

        Order::create([
            'anggota_id' => 2,
            'tipe_order' => 'Retail',
            'status' => 'verify',
            'platform' => 'Konvensional',
            'keperluan' => 'Sendiri',
            'catatan' => 'Modal Sawah'
        ]);
        Order::create([
            'anggota_id' => 1,
            'tipe_order' => 'coming soon',
            'status' => 'verify',
            'platform' => 'Konvensional',
            'keperluan' => 'Sendiri',
            'catatan' => 'Modal Sawah'
        ]);
    }
}
