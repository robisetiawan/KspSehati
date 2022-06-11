<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Pinjam;
use App\Models\Anggota;
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
        return view('dashboard.anggota.pinjaman-VAg', [
            "title" => "Pinjaman",
            'anggotas' => Anggota::where('user_id', auth()->user()->id)->get(),
            'pinjams' => Order::where('anggota_id', auth()->user()->id)->get()
        ]);
    }

    public function simpanan()
    {
        return view('dashboard.anggota.simpanan-VAg', [
            "title" => "Simpanan",
            'anggotas' => Anggota::where('user_id', auth()->user()->id)->get()
        ]);
    }
}
