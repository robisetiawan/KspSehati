<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ag_Berhenti extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    protected $with = ['anggota', 'anggota.user'];

    public function anggota()
    {
        return $this->belongsTo(Anggota::class);
    }

    public function cash_out()
    {
        return $this->hasOne(Cash_out::class);
    }
}
