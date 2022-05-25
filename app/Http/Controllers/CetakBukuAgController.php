<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use Illuminate\Http\Request;

class CetakBukuAgController extends Controller
{
    public function cetak()
    {

        return view('dashboard.fo.cetak-buku-anggota', [
            "title" => "Cetak Buku Anggota",
            "anggotas" => Anggota::all()
        ]);
    }

    public function caricetak(Request $request)
    {
        $cari = $request->cari;

        $anggotas = Anggota::where('no_anggota', 'like', "%" . $cari . "%")->get();
        // $identities = Identity::where('id', 'like', "%" . $anggotas->identity->id . "%")->get();

        $title = "Cetak Buku Anggota";

        return view(
            'dashboard.fo.cari-cetak-buku-anggota',
            compact('anggotas', 'title')
        );
    }

    public function print(Anggota $anggota, $id)
    {

        return view('dashboard.fo.print-buku-anggota', [
            "title" => "Cetak",
            "anggota" => $anggota,
            "anggotas" => Anggota::find($id)
        ]);
    }
}
