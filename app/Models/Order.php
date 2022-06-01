<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Anggota;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    protected $with = ['anggota', 'anggota.user'];

    public function anggota()
    {
        return $this->belongsTo(Anggota::class);
    }

    public function jaminan()
    {
        return $this->belongsTo(Jaminan::class);
    }

    public function barang()
    {
        return $this->belongsTo(Barang::class);
    }

    public function kondisi_unit()
    {
        return $this->belongsTo(Kondisi_unit::class);
    }

    public function las()
    {
        return $this->belongsTo(Las::class);
    }

    public function pinjam()
    {
        return $this->belongsTo(Pinjam::class);
    }
}
