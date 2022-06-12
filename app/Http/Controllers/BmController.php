<?php

namespace App\Http\Controllers;

use App\Models\Pinjam;
use App\Models\Anggota;
use App\Models\Cash_in;
use App\Models\Simpanan;
use Illuminate\Http\Request;

class BmController extends Controller
{
    public function index()
    {
        return view('dashboard.bm.lap-dt-ag', [
            "title" => "Lap Data Anggota",
            "anggotas" => Anggota::with(['user', 'order'])->latest()->get() //tambahkn with agar tidk bnyk melakukan query (fiture=eager loading)

        ]);
    }

    public function detail(Anggota $anggota, $id)
    {
        return view('dashboard.bm.detail-anggota', [
            "title" => "Detail Anggota",
            "anggota" => $anggota,
            "anggotas" => Anggota::find($id),
            "pinlatest" => Pinjam::where('anggota_id', $id)->latest()->first()
        ]);
    }

    public function false()
    {
        return view('dashboard.bm.lap-dt-agFalse', [
            "title" => "Lap Data Anggota",
            "anggotas" => Anggota::with(['user', 'order'])->latest()->get() //tambahkn with agar tidk bnyk melakukan query (fiture=eager loading)

        ]);
    }
    // public function show(Anggota $anggota)
    // {
    //     return view('dashboard.fo.anggotas.anggotas', [
    //         "title" => "Detail Anggota",
    //         "anggotas" => Anggota::all(),
    //         "anggota" => $anggota->user,
    //     ]);
    // }

    public function lapkeuangan()
    {
        return view('dashboard.bm.lap-keuangan', [
            "title" => "Lap Keuangan",
            "pinjams" => Pinjam::with(['anggota.user', 'order'])->latest()->get(),
            // "simpans" => Simpanan::with(['anggota.user', 'anggota'])->latest()->get(),
            "cashin" => Cash_in::latest()->get()
        ]);
    }
}
