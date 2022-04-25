<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggota
{
    use HasFactory;
    private static $kumpul_anggotas = [
        [
            "id" => 1,
            "nama" => "Robi",
            "tempat_lahir" => "Tanjung Kurung",
            "nama_ibu" => "Hasdailah",
            "jenis_kelamin" => "laki-laki"

        ],
        [
            "id" => 2,
            "nama" => "Ranfi",
            "tempat_lahir" => "Palembang",
            "nama_ibu" => "Has",
            "jenis_kelamin" => "laki-laki"
        ]
    ];

    public static function all()
    {
        return collect(self::$kumpul_anggotas);
    }

    public static function find($id)
    {
        $anggotas = static::all(); //mengambil semua data dalam metod all
        // $anggotas = self::$blog_anggotas; //mengambil semua data $blog_anggotas
        // $post = [];
        // foreach ($anggotas as $p) {
        //     if ($p["id"] === $id) {
        //         $post = $p;
        //     }
        // }

        return $anggotas->firstWhere('id', $id);
    }
}
