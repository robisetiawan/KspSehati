<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cash_in extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $with = ['simpanan', 'penerimaan_uang'];

    public function simpanan()
    {
        return $this->belongsTo(Simpanan::class);
    }

    public function penerimaan_uang()
    {
        return $this->belongsTo(PenerimaanUang::class);
    }
}
