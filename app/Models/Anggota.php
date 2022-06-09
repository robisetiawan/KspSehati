<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function order()
    {
        return $this->hasOne(Order::class);
        //satu anggota bisa memiliki >= 1 Order
    }

    public function pinjaman()
    {
        return $this->hasMany(Pinjam::class);
    }

    public function simpanan()
    {
        return $this->hasOne(Simpanan::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function identity()
    {
        return $this->belongsTo(Identity::class);
    }

    public function profession()
    {
        return $this->belongsTo(Profession::class);
    }

    public function adddata()
    {
        return $this->belongsTo(Adddata::class);
    }

    public static function search($search)
    {
        // $user = User::orWhere('name', 'like', '%' . $search . '%');
        return empty($search) ? static::query()
            : static::query()->where('no_anggota', 'like', '%' . $search . '%')
            // ->orWhere('name', 'like', '%' . $search->user . '%')
            ->orWhere('tempat_lahir', 'like', '%' . $search . '%')
            ->orWhere('tanggal_lahir', 'like', '%' . $search . '%');
    }
}
