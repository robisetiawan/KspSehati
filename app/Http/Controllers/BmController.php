<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BmController extends Controller
{
    public function lapdtag()
    {
        return view('bm.lap-dt-agVBM', [
            "title" => "Lap Data Anggota"
        ]);
    }

    public function lappengpinj()
    {
        return view('bm.lap-peng-pinjVBM', [
            "title" => "Lap Pengajuan Pinjaman"
        ]);
    }

    public function lapkeuangan()
    {
        return view('bm.lap-keuanganVBM', [
            "title" => "Lap Keuangan"
        ]);
    }

    public function profilbm()
    {
        return view('bm.profil-VBM', [
            "title" => "Profile"
        ]);
    }
}
