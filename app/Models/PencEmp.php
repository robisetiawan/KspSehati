<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PencEmp extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $with = ['employee'];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
        //satu anggota bisa memiliki >= 1 Identity
    }
}
