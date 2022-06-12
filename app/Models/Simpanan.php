<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Simpanan extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $with = ['anggota'];

    public function anggota()
    {
        return $this->belongsTo(Anggota::class);
    }

    public function cash_in()
    {
        return $this->hasOne(Cash_in::class);
    }

    public static function search($search)
    {
        return empty($search) ? static::query()
            : static::query()->where('created_at', 'like', '%' . $search . '%')
            ->orWhere('jmlh_simpwj', 'like', '%' . $search . '%')
            ->orWhere('simp_wj', 'like', '%' . $search . '%');
    }
}
