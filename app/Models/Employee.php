<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function order()
    {
        return $this->hasMany(Order::class);
        //satu anggota bisa memiliki >= 1 Identity
    }

    public function pencemp()
    {
        return $this->hasMany(PencEmp::class);
    }
}
