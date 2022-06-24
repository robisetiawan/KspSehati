<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {

        return view('dashboard.layouts.dashboard', [
            "title" => "Dashboard",
            "anggotas" => \App\Models\Anggota::count(),
            "employees" => \App\Models\Employee::count(),
            "order" => \App\Models\Order::where('sisa_angs', '>', 0)->count(),
            "pinj" => \App\Models\Order::count()
        ]);
    }
}
