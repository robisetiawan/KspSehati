<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Models\PenerimaanUang;

class PenerimaanUangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.fo.penerimaan-uang.penerimaan-uangs', [
            "title" => "Penerimaan Uang",
            "penugs" => PenerimaanUang::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.fo.penerimaan-uang.create-penerimaan-uang', [
            'title' => 'Tambah Anggota',
            'orders' => Order::all()
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
        $pen = PenerimaanUang::create([
            'no_terima' => date('dmy') . "PU" . $request->id,
            'order_id' => $request->id
        ]);

        return redirect('/dashboard/penerimaan-uang')->with('success', 'Berhasil menambahkan order');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PenerimaanUang  $penerimaanUang
     * @return \Illuminate\Http\Response
     */
    public function show(PenerimaanUang $penerimaanUang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PenerimaanUang  $penerimaanUang
     * @return \Illuminate\Http\Response
     */
    public function edit(PenerimaanUang $penerimaanUang)
    {
        return view('dashboard.fo.penerimaan-uang.edit-penerimaan-uang', [
            "title" => "Penerimaan Uang",
            'pene' => $penerimaanUang,
            'orders' => Order::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PenerimaanUang  $penerimaanUang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PenerimaanUang $penerimaanUang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PenerimaanUang  $penerimaanUang
     * @return \Illuminate\Http\Response
     */
    public function destroy(PenerimaanUang $penerimaanUang)
    {
        PenerimaanUang::destroy($penerimaanUang->id);

        return redirect('/dashboard/penerimaan-uang]')->with('success', 'Data Berhasil dihapus');
    }
}
