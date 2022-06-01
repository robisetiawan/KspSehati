<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pinjam extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function anggota()
    {
        return $this->belongsTo(Anggota::class);
    }

    public function order()
    {
        return $this->hasOne(Order::class);
        //satu anggota bisa memiliki >= 1 Identity
    }
}
