<?php

namespace App\Exports;

use App\Models\Anggota;
use Illuminate\Support\Carbon;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class AnggotaExport implements FromCollection, WithMapping, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Anggota::all();
    }

    public function map($anggota): array
    {
        return [
            //anggota
            $anggota->user->email,
            $anggota->user->name,
            $anggota->nama_panggilan,
            $anggota->no_anggota,
            Carbon::parse($anggota->created_at)->toFormattedDateString(),
            $anggota->jenis_kelamin,
            $anggota->tempat_lahir,
            $anggota->tanggal_lahir,
            $anggota->nama_ibu,
            $anggota->telepon_seluler,
            $anggota->telepon_rumah,
            $anggota->telepon_kantor,
            //identitas
            $anggota->identity->type_identitas,
            $anggota->identity->no_identitas,
            $anggota->identity->warganegara,
            $anggota->identity->agama,
            $anggota->identity->pendidikan,
            $anggota->identity->gelar,
            $anggota->identity->status_kawin,
            $anggota->identity->gol_darah,
            $anggota->identity->status_rumah,
            $anggota->identity->alamat,
            $anggota->identity->rt,
            $anggota->identity->rw,
            $anggota->identity->desa_kel,
            $anggota->identity->kec,
            $anggota->identity->kab_kota,
            $anggota->identity->provinsi,
            $anggota->identity->kode_pos,
            //profession
            $anggota->profession->pekerjaan,
            $anggota->profession->lama_kerja_tahun . ' Tahun',
            $anggota->profession->lama_kerja_bulan . ' Bulan',
            $anggota->profession->tanggungan,
            $anggota->profession->omset_dagang,
            $anggota->profession->pendapatan,
            $anggota->profession->gaji,
            $anggota->profession->pendapatan_psg,
            $anggota->profession->pendapatan_lain,
            $anggota->profession->biaya_bulanan,
            // data tambahan
            $anggota->adddata->nama,
            $anggota->adddata->alamat_add,
            $anggota->adddata->rt_add,
            $anggota->adddata->rw_add,
            $anggota->adddata->desa_kel_add,
            $anggota->adddata->kec_add,
            $anggota->adddata->kab_kota_add,
            $anggota->adddata->provinsi_add,
            $anggota->adddata->kode_pos_add,
            $anggota->adddata->telepon_rumah_add,
            $anggota->adddata->telepon_seluler_add,
        ];
    }

    public function headings(): array
    {
        return [
            //anggota
            'Email',
            'Nama',
            'Nama Panggilan',
            'No Anggota',
            'Tanggal Gabung',
            'Jenis Kelamin',
            'Tempat Lahir',
            'Tanggal Lahir',
            'Nama Ibu',
            'Telp Seluler',
            'Telp Rumah',
            'Telp Kantor',
            //identitas
            'Type Identitas',
            'No Identitas',
            'Warganegara',
            'Agama',
            'Pendidikan',
            'Gelar',
            'Status Kawin',
            'Gol Darah',
            'Status Rumah',
            'Alamat',
            'RT',
            'RW',
            'Desa / Kel',
            'Kec',
            'Kab / Kota',
            'Provinsi',
            'Kode Pos',
            //profession
            'Pekerjaan',
            'Lama Kerja (Tahun)',
            'Lama Kerja (Bulan)',
            'Tanggungan',
            'Omset Dagang',
            'Pendapatan',
            'Gaji',
            'Pendapatan Psg',
            'Pendapatan Lain',
            'Biaya Bulanan',
            //adddata
            'Nama',
            'Alamat',
            'RT',
            'RW',
            'Desa / Kel',
            'Kec',
            'Kab / Kota',
            'Provinsi',
            'Kode Pos',
            'Telepon Rumah',
            'Telepon Seluler',
        ];
    }
}
