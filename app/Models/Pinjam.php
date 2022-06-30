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

    public function cash_out()
    {
        return $this->hasOne(Cash_out::class);
    }

    public static function search($search)
    {
        return empty($search) ? static::query()
            : static::query()->where('created_at', 'like', '%' . $search . '%')
            ->orWhere('nilai_pinj', 'like', '%' . $search . '%')
            ->orWhere('pk_kem', 'like', '%' . $search . '%')
            ->orWhere('angsuran', 'like', '%' . $search . '%')
            ->orWhere('bunga', 'like', '%' . $search . '%')
            ->orWhere('bunga_marg', 'like', '%' . $search . '%')
            ->orWhere('pk_marg', 'like', '%' . $search . '%')
            ->orWhere('periode', 'like', '%' . $search . '%')
            ->orWhere('admin', 'like', '%' . $search . '%')
            ->orWhere('harga_acuan', 'like', '%' . $search . '%');
    }
}
