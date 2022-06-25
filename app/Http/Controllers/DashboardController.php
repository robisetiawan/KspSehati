<?php

namespace App\Http\Controllers;

use App\Models\Cash_in;
use App\Models\Pinjam;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {

        // dd($total, $bulan);
        return view('dashboard.layouts.dashboard', [
            "title" => "Dashboard",
            "anggotas" => \App\Models\Anggota::count(),
            "employees" => \App\Models\Employee::count(),
            "order" => \App\Models\Order::where('sisa_angs', '>', 0)->count(),
            "pinj" => \App\Models\Order::count(),
        ]);
    }
}
