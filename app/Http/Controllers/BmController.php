<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Pinjam;
use App\Models\Anggota;
use App\Models\Cash_in;
use App\Models\Cash_out;
use App\Models\Employee;
use App\Models\PencEmp;
use App\Models\PenerimaanUang;
use App\Models\Simpanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
            "emp" => Employee::orderBy('bawa_ag', 'DESC')->get(), //tambahkn with agar tidk bnyk melakukan query (fiture=eager loading)
            "penc" => PencEmp::latest()->get()
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

    public function in()
    {
        $i = Cash_in::sum('total');

        $cashin = Cash_in::select(DB::raw("CAST(SUM(total) as int) as cashin"))
            ->GroupBy(DB::raw("Date(created_at)"))
            ->pluck('cashin');

        $moon = Cash_in::select(DB::raw('DATE_FORMAT(created_at, "%Y-%m-%d") as moon'))
            ->GroupBy(DB::raw('DATE_FORMAT(created_at, "%Y-%m-%d")'))
            ->OrderBy(DB::raw('date(created_at)'))
            ->pluck('moon');
        return view('dashboard.bm.lap-keuangan-in', [
            "title" => "Lap Uang Masuk",
            "orders" => Order::latest()->get(),
            // "simpans" => Simpanan::with(['anggota.user', 'anggota'])->latest()->get(),
            "cashin" => Cash_in::latest()->get(),
            "jmlhcashin" => $i,
            "masuk" => $cashin,
            "moon" => $moon
        ]);
    }
    public function Out()
    {
        $d = Cash_out::sum('total');
        // $i = Cash_in::sum('total');

        $total = Cash_out::select(DB::raw("CAST(SUM(total) as int) as nominal"))
            ->GroupBy(DB::raw("Date(created_at)"))
            ->pluck('nominal');

        $bulan = Cash_out::select(DB::raw('DATE_FORMAT(created_at, "%Y-%m-%d") as bulan'))
            ->GroupBy(DB::raw('DATE_FORMAT(created_at, "%Y-%m-%d")'))
            ->OrderBy(DB::raw('date(created_at)'))
            ->pluck('bulan');

        return view('dashboard.bm.lap-keuangan-out', [
            "title" => "Lap Uang Keluar",
            "orders" => Order::latest()->get(),
            // "simpans" => Simpanan::with(['anggota.user', 'anggota'])->latest()->get(),
            "cashout" => Cash_out::latest()->get(),
            "penu" => PenerimaanUang::latest()->get(),
            "jmlhcashout" => $d,
            "total" => $total,
            "bulan" => $bulan,
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
