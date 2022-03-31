<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BmController extends Controller
{
    public function lapdtag()
    {
        return view('bm.lap-dt-ag-VBM', [
            "title" => "Lap Data Anggota"
        ]);
    }

    public function lapkeuangan()
    {
        return view('bm.lap-keuangan-VBM', [
            "title" => "Lap Keuangan"
        ]);
    }

    public function profilbm()
    {
        return view('bm.profil-VBM', [
            "title" => "Profile"
        ]);
    }

    public function detailag()
    {
        return view('bm.detail-ag-VBM', [
            "title" => "Detail Anggota"
        ]);
    }
}
