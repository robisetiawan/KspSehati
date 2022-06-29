<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Identity extends Model
{
    use HasFactory;
    protected $guarded = [''];

    public function anggota()
    {
        return $this->hasOne(Anggota::class);
        //satu anggota bisa memiliki >= 1 Identity
    }
}
