<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pooling
{
    private static $pooling = [
        [
            "id" => 1,
            "title" => "1",
            "nama" => "satu",
            "no order" => "A",
        ],
        [
            "id" => 2,
            "title" => "2",
            "nama" => "dua",
            "no order" => "asdasdB",
        ]


    ];

    public static function all()
    {
        return collect(self::$pooling);
        //return this->$blog_post;  ( kalau dia sebagai properti biasa  )
    }

    public static function find($id)
    {
        $pooling = static::all(); //mengambil semua data dalam metod all
        // $posts = self::$blog_posts; //mengambil semua data $blog_posts
        // $post = [];
        // foreach ($posts as $p) {
        //     if ($p["slug"] === $slug) {
        //         $post = $p;
        //     }
        // }

        return $pooling->firstWhere('id', $id);
    }
}
