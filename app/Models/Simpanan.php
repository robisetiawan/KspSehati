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
}
