<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Barang;
use App\Models\Anggota;
use App\Models\Jaminan;
use App\Models\Identity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FoOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.fo.orders.orders', [
            "title" => "Orders",
            "orders" => Order::latest()->get(),
            // "anggotas" => Anggota::with(['user', 'order'])->latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('dashboard.fo.pooling-order', [
        //     'title' => 'Tambah Anggota',
        //     'anggotas' => Order::all()
        // ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $order = $request->validate([
        //     ''
        // ])
        // $anggota = Anggota::all();

        // dd($request);

        $createorder = DB::transaction(
            function () use ($request) {

                $jaminan = Jaminan::create([
                    "barang" => $request->barang,
                    "buss_unit" => $request->buss_unit,
                    "ada_jaminan" => $request->ada_jaminan,
                    "no_polisi" => $request->no_polisi,
                    "no_mesin" => $request->no_mesin
                ]);

                $barang = Barang::create([
                    "bpkb" => $request->bpkb,
                    "stnk_ada" => $request->stnk_ada
                ]);

                $order = Order::create([
                    "no_order" => date('dmy') . "OR" . $request->id,
                    "anggota_id" => $request->id,
                    "jaminan_id" => $jaminan->id,
                    "barang_id" => $barang->id
                ]);
            }
        );

        return redirect('/dashboard/orders')->with('success', 'Berhasil menambahkan order');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        return view('anggota', [
            "title" => "Edit Order",
            "orders" => $order
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        return view('dashboard.fo.orders.edit-order', [
            'title' => 'Edit Order',
            'order' => $order,
            'orders' => Order::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        dd($request);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }

    public function poolingorder()
    {


        return view('dashboard.fo.orders.pooling-order', [
            "title" => "Pooling Order",
            "anggotas" => Anggota::all()
        ]);
    }

    public function caripoolingorder(Request $request)
    {
        $cari = $request->cari;

        $anggotas = Anggota::where('no_anggota', 'like', "%" . $cari . "%")->get();
        // $identities = Identity::where('id', 'like', "%" . $anggotas->identity->id . "%")->get();

        $title = "Pooling Order";

        return view(
            'dashboard.fo.orders.pooling-order-cari',
            compact('anggotas', 'title')
        );
    }
}
