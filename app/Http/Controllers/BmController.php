<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BmController extends Controller
{
    public function lapdtag()
    {
        return view('dashboard.bm.lap-dt-ag-VBM', [
            "title" => "Lap Data Anggota"
        ]);
    }

    public function lapkeuangan()
    {
        return view('dashboard.bm.lap-keuangan-VBM', [
            "title" => "Lap Keuangan"
        ]);
    }
}
