<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Pinjam;
use App\Models\Anggota;
use App\Models\Cash_in;
use App\Models\Employee;
use App\Models\Simpanan;
use Illuminate\Http\Request;

class BmController extends Controller
{
    public function index()
    {
        return view('dashboard.bm.lap-dt-ag', [
            "title" => "Lap Data Anggota",
            "anggotas" => Anggota::with(['user', 'order'])->latest()->get(), //tambahkn with agar tidk bnyk melakukan query (fiture=eager loading)
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

    public function employee()
    {
        return view('dashboard.bm.lap-dt-employee', [
            "title" => "Lap Data Karyawan",
            "emp" => Employee::orderBy('bawa_ag', 'DESC')->get() //tambahkn with agar tidk bnyk melakukan query (fiture=eager loading)

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
        $d = Pinjam::sum('nilai_pinj');
        $i = Cash_in::sum('total');
        // dd($d, $i);
        return view('dashboard.bm.lap-keuangan', [
            "title" => "Lap Keuangan",
            "orders" => Order::latest()->get(),
            // "simpans" => Simpanan::with(['anggota.user', 'anggota'])->latest()->get(),
            "cashin" => Cash_in::latest()->get(),
            "jmlhcashout" => $d,
            "jmlhcashin" => $i
        ]);
    }

    public function bawaag($id)
    {
        $anggota = Order::where('employee_id', $id)->get();
        $emp = Employee::where('id', $id)->first();
        $title = 'Anggota dari ' . $emp->nama;

        return view('dashboard.bm.bawa-ag', compact('anggota', 'title', 'emp'));
    }

    public function detailemployee($id)
    {
        $employee = Employee::where('id', $id)->first();
        $title  = 'Detail Karyawan';

        return view('dashboard.bm.show-employee', compact('employee', 'title'));
    }

    public function detailag($idemp, $idag)
    {
        $anggotas = Anggota::where('id', $idag)->first();
        $emp = Employee::where('id', $idemp)->first();
        $pinlatest = Pinjam::where('anggota_id', $idag)->latest()->first();
        $title = 'Detail Anggota';
        // dd($anggotas, $emp, $idemp);
        return view('dashboard.bm.detail-ag-for-emp', compact('anggotas', 'title', 'emp', 'pinlatest'));
    }
}
