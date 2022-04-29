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
}
