<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Order;
use App\Models\Barang;
use App\Models\Pinjam;
use App\Models\Adddata;
use App\Models\Anggota;
use App\Models\History;
use App\Models\Jaminan;
use App\Models\Identity;
use App\Models\Kondisi_unit;
use App\Models\Las;
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
            'roles' => 'FO',
            'password' => bcrypt('password')
        ]);
        User::create([
            'name' => 'Randi',
            'email' => 'randis@gmail.com',
            'roles' => 'BM',
            'password' => bcrypt('password')
        ]);
        User::create([
            'name' => 'Baim',
            'email' => 'baim@gmail.com',
            'roles' => 'Anggota',
            'password' => bcrypt('password')
        ]);

        User::factory(18)->create();

        Anggota::create([
            'user_id' => 1,
            'identity_id' => 1,
            'profession_id' => 1,
            'adddata_id' => 1,
            'no_anggota' => 'AKS025627',
            'nama_panggilan' => 'Robi',
            'jenis_kelamin' => 'Laki-laki',
            'tempat_lahir' => 'Tj Kurung',
            'nama_ibu' => 'Has',
            'simpkok' => 50000
        ]);

        Anggota::factory(20)->create();

        Kondisi_unit::create([
            'kategori_m' => 'Baik'
        ]);

        Las::create([
            'motor' => "Ada"
        ]);

        Profession::create([
            'pekerjaan' => 'Pengusaha',
            'tanggungan' => 2
        ]);
        Order::create([
            'anggota_id' => 1,
            'jaminan_id' => 1,
            'barang_id' => 1,
            'las_id' => 1,
            'kondisi_unit_id' => 1,
            'pinjam_id' => 1,
            'history_id' => 1,
            'no_order' => '040622OR15',
            'keperluan' => 'Sendiri',
            'catatan' => 'Modal Sawah',
            'catt_survey' => 'Anggota memiliki rumah sendiri'
        ]);

        Jaminan::create([
            'ada_jaminan' => 'Ada Jaminan',
            'buss_unit' => '01 - Pinjaman Jaminan Motor',
            'no_polisi' => 'BG6193ADP',
            'no_mesin' => 'NNMDSANDASMDKASXKOLDPDANIS',
            'kepemilikan' => 'Milik Sendiri',
            'barang' => 'Motor',
            'tipe' => 'Beat',
            'tahun' => '2017',
            'awalorakhir' => 'Awal',
            'harga_pasar' => '14000000'
        ]);

        Barang::create([
            'bpkb' => 'Atas Nama Sendiri',
            'stnk_ada' => 'Ada',
            'faktur' => 'Tidak Ada',
            'surat_jual_beli' => 'Ada',
            'stnk_mati_tahun' => '3'
        ]);

        Pinjam::create([
            'anggota_id' => 1,
            'nilai_pinj' => 1000000,
            'pk_kem' => 1160000,
            'tipe_angs' => 'Tetap',
            'jumlah_angs' => '6',
            'periode' => '6',
            'per_p' => 'Bulan',
            'angsuran' => 239000,
            'admin_total' => 160000,
            'bunga' => 3.937,

        ]);

        History::create([
            'anggota_id' => 1,
            'simp_wj' => 5000
        ]);
        // Order::create([
        //     'anggota_id' => 1,
        //     'no_order' => '120522OR12432',
        //     'tipe_order' => 'coming soon',
        //     'status' => 'verify',
        //     'platform' => 'Konvensional',
        //     'keperluan' => 'Sendiri',
        //     'catatan' => 'Modal Sawah'
        // ]);

        // Order::factory(18)->create();

        Identity::create([
            'type_identitas' => 'KTP',
            'no_identitas' => '1234567890123456',
            'warganegara' => 'WNI',
            'agama' => 'Islam',
            'pendidikan' => 'Sarjana S1',
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
            'alamat_add' => 'Jl. Abusamah',
            'rt_add' => '041',
            'rw_add' => '006',
            'desa_kel_add' => 'Sukajaya',
            'kec_add' => 'Sukarami',
            'kab_kota_add' => 'Palembang',
            'provinsi_add' => 'Sumatera Selatan',
            'kode_pos_add' => '30151',
            'telepon_rumah_add' => '082175571725',
            'telepon_seluler_add' => '082175344567',
        ]);
    }
}
