<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenerimaanUang extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $with = ['order'];

    public function order()
    {
        return $this->belongsTo(Order::class);
        //satu anggota bisa memiliki >= 1 Identity
    }

    public function cash_in()
    {
        return $this->hasOne(Cash_in::class);
    }
}
