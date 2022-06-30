<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cash_out extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $with = ['pinjam', 'agberhenti'];

    public function pinjam()
    {
        return $this->belongsTo(Pinjam::class);
    }

    public function agberhenti()
    {
        return $this->belongsTo(Ag_Berhenti::class);
    }
}
