<?php

namespace App\Http\Controllers;

use App\Models\Pinjam;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PinjamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // dd($request);
        $pinjamans = DB::transaction(
            function () use ($request) {

                $validatedData = $request->validate([
                    "anggota_id" => 'unique:pinjams',
                    "pk_kem" => 'required|unique:pinjams'
                ]);
                //Currency
                $deleteRp = array("Rp", ".", " ");

                $nilai_pinjRp = str_replace($deleteRp, "", $request->nilai_pinj);
                $pk_kemRp = str_replace($deleteRp, "", $request->pk_kem);
                $jumlah_angsRp = str_replace($deleteRp, "", $request->jumlah_angs);
                $angsuranRp = str_replace($deleteRp, "", $request->angsuran);
                $admin_totalRp = str_replace($deleteRp, "", $request->admin_total);

                $intnilai_pinj = (int)$nilai_pinjRp;
                $intpk_kem = (int)$pk_kemRp;
                $intjumlah_angs = (int)$jumlah_angsRp;
                $intangsuran = (int)$angsuranRp;
                $intadmin_total = (int)$admin_totalRp;
                //endCurrency

                $pinj = Pinjam::create([
                    "anggota_id" => $request->id,
                    "nilai_pinj" => $intnilai_pinj,
                    "pk_kem" => $intpk_kem,
                    "tipe_angs" => $request->tipe_angsminan,
                    "ad_ar" => $request->ad_ar,
                    "jumlah_angs" => $intjumlah_angs,
                    "periode" => $request->periode,
                    "per_p" => $request->per_p,
                    "angsuran" => $intangsuran,
                    "kategori" => $request->kategori,
                    "admin_total" => $intadmin_total,
                ]);
            }
        );

        return redirect('/dashboard/struktur-kredit')->with('success', 'Pinjaman Berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
