<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Order;
use App\Models\Adddata;
use App\Models\Anggota;
use App\Models\Identity;
use App\Models\Profession;
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

        User::factory(18)->create();

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

        Order::factory(18)->create();

        Identity::create([
            'type_identitas' => 'KTP',
            'no_identitas' => '1234567890123456',
            'warganegara' => 'WNI',
            'agama' => 'Islam',
            'pendidikan' => 'Sarjana',
            'gelar' => 'S1',
            'status_kawin' => 'Belum kawin',
            'gol_darah' => 'O',
            'status_rumah' => 'Rumah Orang tua',
            'alamat' => 'Jl.Abusamah',
            'rt' => '041',
            'rw' => '006',
            'desa_kel' => 'Sukabangun',
            'kec' => 'Sukarami',
            'kab_kota' => 'Palembang',
            'provinsi' => 'Sumatera Selatan',
            'kode_pos' => '30151'
        ]);

        Profession::create([
            'pekerjaan' => 'Petani',
            'lama_kerja_tahun' => '4',
            'lama_kerja_bulan' => '2',
            'tanggungan' => '3',
            'omset_dagang' => '1000000',
            'pendapatan' => '2000000',
            'gaji' => '2000000',
            'pendapatan_psg' => '1000000',
            'pendapatan_lain' => '500000',
            'biaya_bulanan' => '2000000',

        ]);

        Adddata::create([
            'nama' => 'Salaudin',
            'alamat' => 'Jl. Abusamah',
            'rt' => '041',
            'rw' => '006',
            'desa_kel' => 'Sukajaya',
            'kec' => 'Sukarami',
            'kab_kota' => 'Palembang',
            'provinsi' => 'Sumatera Selatan',
            'kode_pos' => '30151',
            'telepon_rumah' => '082175571725',
            'telepon_seluler' => '082175344567',
        ]);
    }
}
