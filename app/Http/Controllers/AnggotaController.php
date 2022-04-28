<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Anggota;
use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    public function index()
    {
        return view('dashboard.fo.anggotas', [
            "title" => "Tampil Anggota",
            // "anggotas" => Anggota::all(),
            // "anggotas" => Anggota::latest()->get()
            "anggotas" => Anggota::with(['user', 'order'])->latest()->get() //tambahkn with agar tidk bnyk melakukan query (fiture=eager loading)

        ]);
    }

    public function show($id)
    {
        return view('anggota', [
            "title" => "Single Anggota",
            "anggota" => Anggota::find($id)
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
