<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use Illuminate\Http\Request;

class BmController extends Controller
{
    public function index()
    {
        return view('dashboard.bm.lap-dt-ag-VBM', [
            "title" => "Lap Data Anggota",
            "anggotas" => Anggota::with(['user', 'order'])->latest()->get() //tambahkn with agar tidk bnyk melakukan query (fiture=eager loading)

        ]);
    }

    public function show(Anggota $anggota)
    {
        return view('dashboard.fo.anggotas.anggotas', [
            "title" => "Detail Anggota",
            "anggotas" => Anggota::all(),
            "anggota" => $anggota->user,
        ]);
    }

    public function lapkeuangan()
    {
        return view('dashboard.bm.lap-keuangan-VBM', [
            "title" => "Lap Keuangan"
        ]);
    }
}
