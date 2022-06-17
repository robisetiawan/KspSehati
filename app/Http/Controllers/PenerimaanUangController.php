<?php

namespace App\Http\Controllers;

use App\Models\Cash_in;
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
        if ($request->cr_bayar === 'Transfer')
            $p = [
                // 'no_terima' => 'required|unique:penerimaan-uangs',
                'trm_dr' => 'required',
                'angsuran_ke' => 'required',
                'nominal' => 'required',
                'cr_bayar' => 'required',
                'kd_bank' => 'required',
                'no_rek' => 'required',
                'sisa_pj' => 'nullable'
            ];
        else
            $p = [
                // 'no_terima' => 'required|unique:penerimaan-uangs',
                'trm_dr' => 'required',
                'angsuran_ke' => 'required',
                'nominal' => 'required',
                'cr_bayar' => 'required',
                'kd_bank' => 'nullable',
                'no_rek' => 'nullable',
                'sisa_pj' => 'nullable'
            ];

        $validatedData = $request->validate($p);
        $validatedData['no_terima'] = date('dmy') . "PU" . $request->id . rand(1, 999);
        $validatedData['order_id'] = $request->id;
        $sp = $request->pk_marg - ($request->angsuran_ke * $request->nominal);

        $validatedData['sisa_pj'] = $sp;

        $pen = PenerimaanUang::create($validatedData);

        $cash_in = Cash_in::create([
            'penerimaan_uang_id' => $pen->id,
            'total' => $request->nominal
        ]);

        Order::where('id', $request->id)
            ->update(['sisa_angs' => $request->periode - $request->angsuran_ke]);

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
        return view('dashboard.fo.penerimaan-uang.show-penerimaan-uang', [
            "title" => "Penerimaan Uang",
            "pene" => $penerimaanUang
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PenerimaanUang  $penerimaanUang
     * @return \Illuminate\Http\Response
     */
    public function edit(PenerimaanUang $penerimaanUang)
    {
        // dd($penerimaanUang);
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
        // dd($request);

        if ($request->cr_bayar === 'Transfer')
            $pen = [
                'trm_dr' => 'required',
                'angsuran_ke' => 'required',
                'nominal' => 'required',
                'cr_bayar' => 'required',
                'kd_bank' => 'required',
                'no_rek' => 'required',
                'sisa_pj' => 'nullable'
            ];
        else
            $pen = [
                'trm_dr' => 'required',
                'angsuran_ke' => 'required',
                'nominal' => 'required',
                'cr_bayar' => 'required',
                'kd_bank' => 'nullable',
                'no_rek' => 'nullable',
                'sisa_pj' => 'nullable'
            ];

        $validatedData = $request->validate($pen);

        //Currency
        $deleteRp = array(
            "Rp", ".", " "
        );

        $sp = $request->pk_marg - ($request->angsuran_ke * $request->nominal);

        // $nominal = str_replace($deleteRp, "", $request->nominal);
        // $sisa_pj = str_replace($deleteRp, "", $sp);
        // $validatedData['nominal'] = (int)$nominal;
        $validatedData['sisa_pj'] = $sp;
        //endCurrency
        Cash_in::where('penerimaan_uang_id', $penerimaanUang->id)
            ->update(['total' => $request->nominal]);
        $pene = PenerimaanUang::where('id', $penerimaanUang->id)
            ->update($validatedData);

        Order::where('id', $request->order_id)
            ->update(['sisa_angs' => $request->periode - $request->angsuran_ke]);

        return redirect('/dashboard/penerimaan-uang')->with('success', 'Data Berhadsil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PenerimaanUang  $penerimaanUang
     * @return \Illuminate\Http\Response
     */
    public function destroy(PenerimaanUang $penerimaanUang)
    {
        $s = Order::where('id', $penerimaanUang->order_id)->first();
        // dd($penerimaanUang->angsuran_ke, $penerimaanUang->order->pinjam->periode, $s->sisa_angs);
        PenerimaanUang::destroy($penerimaanUang->id);
        Cash_in::where('penerimaan_uang_id', $penerimaanUang->id)
            ->delete();

        Order::where('id', $penerimaanUang->order_id)
            ->update(['sisa_angs' => $penerimaanUang->angsuran_ke + $s->sisa_angs]);

        return redirect('/dashboard/penerimaan-uang')->with('success', 'Data Berhasil dihapus');
    }

    public function cetak(PenerimaanUang $penerimaanUang, $id)
    {

        return view('dashboard.fo.penerimaan-uang.cetak-penerimaan-uang', [
            "title" => "Cetak",
            "pene" => $penerimaanUang,
            "penes" => PenerimaanUang::find($id)
        ]);
    }
}
