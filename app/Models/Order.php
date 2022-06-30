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

    public function lingkungan()
    {
        return $this->belongsTo(Lingkungan::class);
    }

    public function pinjam()
    {
        return $this->belongsTo(Pinjam::class);
    }

    // public function history()
    // {
    //     return $this->belongsTo(History::class);
    // }

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

    public function penerimaan_uang()
    {
        return $this->hasOne(PenerimaanUang::class);
    }

    public function berkas()
    {
        return $this->hasMany(Berkas::class);
    }

    public function fisik_image()
    {
        return $this->hasMany(Fisik_image::class);
    }

    public function surat_image()
    {
        return $this->hasMany(Surat_image::class);
    }

    public function bpkbm()
    {
        return $this->hasOne(Bpkb_m::class);
    }

    public function bpkbk()
    {
        return $this->hasOne(Bpkb_k::class);
    }

    public function cash_out()
    {
        return $this->hasOne(Cash_out::class);
    }
}
