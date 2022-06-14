<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Pinjam;
use App\Models\Anggota;
use App\Models\Simpanan;
use Illuminate\Http\Request;

class AgAnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.anggota.kartu-anggota', [
            'title' => 'Kartu Anggota',
            'anggotas' => Anggota::where('user_id', auth()->user()->id)->get()
        ]);
    }

    public function pinjaman()
    {
        $a = Anggota::where('user_id', auth()->user()->id)->first();
        return view('dashboard.anggota.pinjaman-VAg', [
            "title" => "Pinjaman",
            'anggotas' => $a,
            'pinjams' => Order::where('anggota_id', $a->id)->get(),
            "pinlatest" => Pinjam::where('anggota_id', $a->id)->latest()->first()
        ]);
    }

    public function simpanan()
    {
        $a = Anggota::where('user_id', auth()->user()->id)->first();
        return view('dashboard.anggota.simpanan-VAg', [
            "title" => "Simpanan",
            'anggotas' => $a,
            'simpans' => Simpanan::where('anggota_id', $a->id)->get()

        ]);
    }
}
