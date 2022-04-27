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

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
