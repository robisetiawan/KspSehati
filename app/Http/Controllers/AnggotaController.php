<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    public function index()
    {
        return view('fo.anggota-VFO', [
            "title" => "Tampil Anggota",
            "anggotas" => Anggota::all()
        ]);
    }

    public function show($id)
    {
        return view('anggota', [
            "title" => "Single Anggota",
            "anggaota" => Anggota::find($id)
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
