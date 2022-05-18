<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Anggota;
use App\Models\Identity;
use Illuminate\Http\Request;

class FoOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.fo.orders', [
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
        return view('dashboard.fo.pooling-order', [
            'title' => 'Tambah Anggota',
            'anggotas' => Order::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
            "anggotas" => Anggota::all(),
            "anggota" => $order->anggota,
            "order" => $order->status,
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
        //
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
        //
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


        return view('dashboard.fo.pooling-order', [
            "title" => "Pooling Order",
            "anggotas" => Anggota::all()
        ]);
    }

    public function caripoolingorder(Request $request)
    {
        $cari = $request->cari;

        $anggotas = Anggota::where('no_anggota', 'like', "%" . $cari . "%")->get();
        $identities = Identity::where('id', 'like', "%" . $anggotas->identity->id . "%")->get();

        $title = "Pooling Order";

        return view(
            'dashboard.fo.pooling-order-cari',
            compact('anggotas', 'title', 'identities')
        );
    }
}
