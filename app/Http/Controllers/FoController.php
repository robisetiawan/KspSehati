<?php

namespace App\Http\Controllers;

use App\Models\Pooling;
use Illuminate\Http\Request;

class FoController extends Controller
{
    // public function anggota()
    // {
    //     return view('fo.anggota-VFO', [
    //         "title" => "Anggota"
    //     ]);
    // }

    public function index()
    {
        return view('fo.pooling-order-VFO', [
            "title" => "Pooling Order",
            "pooling" => Pooling::all()
        ]);
    }

    public function order()
    {
        return view('fo.order-VFO', [
            "title" => "Order"
        ]);
    }

    public function editorder()
    {
        return view('fo.edit-order-VFO', [
            "title" => "Edit Order"
        ]);
    }

    public function strukturkredit()
    {
        return view('fo.struktur-kredit-VFO', [
            "title" => "Struktur Kredit"
        ]);
    }

    public function penerimaanuang()
    {
        return view('fo.penerimaan-uang-VFO', [
            "title" => "Penerimaan Uang"
        ]);
    }

    public function cetakbukuanggota()
    {
        return view('fo.cetak-buku-anggota-VFO', [
            "title" => "Cetak Buku Anggota"
        ]);
    }

    public function profilfo()
    {
        return view('fo.profil-VFO', [
            "title" => "Profile"
        ]);
    }

    public function printbukuag()
    {

        return view('fo.print-buku-anggota', [
            "title" => "Cetak"
        ]);
    }

    public function kartuanggota()
    {
        return view('anggota.kartu-anggota-VAg', [
            "title" => "Kartu Anggota"
        ]);
    }

    public function pinjaman()
    {
        return view('anggota.pinjaman-VAg', [
            "title" => "Pinjaman"
        ]);
    }

    public function simpanan()
    {
        return view('anggota.simpanan-VAg', [
            "title" => "Simpanan"
        ]);
    }

    public function profilag()
    {
        return view('anggota.profil-VAg', [
            "title" => "Ubah Password"
        ]);
    }
}
