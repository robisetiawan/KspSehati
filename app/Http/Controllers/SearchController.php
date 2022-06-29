<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Bpkb_m;
use App\Models\Anggota;
use Illuminate\Http\Request;
use App\Models\PenerimaanUang;

class SearchController extends Controller
{
    public function bpkbm()
    {

        return view('dashboard.fo.bpkb-masuk.create-bpkbm', [
            "title" => "Tambah Data Bpkb Masuk",
            // "anggotas" => Anggota::all()
        ]);
    }

    public function bpkbmcari(Request $request)
    {

        $search = $request->input('cari');

        $title = 'Tambah Data Bpkb Masuk';
        $order = Order::query()
            ->where('no_order', 'LIKE', "%{$search}%")
            ->orWhere('nama', 'LIKE', "%{$search}%")
            ->get();

        return view('dashboard.fo.bpkb-masuk.create-bpkbm-cari', compact('order', 'title'));
    }

    public function bpkbk()
    {

        return view('dashboard.fo.bpkb-keluar.create-bpkbk', [
            "title" => "Tambah Data Bpkb Keluar",
            // "anggotas" => Anggota::all()
        ]);
    }

    public function bpkbkcari(Request $request)
    {

        $search = $request->input('cari');

        $title = 'Tambah Data Bpkb Keluar';
        $bpkbm = Bpkb_m::query()
            ->where('penyerah', 'LIKE', "%{$search}%")
            ->get();

        return view('dashboard.fo.bpkb-keluar.create-bpkbk-cari', compact('bpkbm', 'title'));
    }

    public function penusearch(Request $request)
    {

        $search = $request->input('cari');

        $title = 'Tambah Data Bpkb Keluar';
        $order = Order::query()
            ->where('no_order', 'LIKE', "%{$search}%")
            ->orWhere('nama', 'LIKE', "%{$search}%")
            ->get();

        return view('dashboard.fo.penerimaan-uang.create-penu-cari', compact('order', 'title'));
    }

    public function agcari(Request $request)
    {

        $search = $request->input('cari');

        $title = 'Tambah Data';
        $anggota = Anggota::query()
            ->where('no_anggota', 'LIKE', "%{$search}%")
            ->orWhere('nama_panggilan', 'LIKE', "%{$search}%")
            ->get();

        return view('dashboard.fo.anggotas.stopout.create-agstopout-cari', compact('anggota', 'title'));
    }
}
