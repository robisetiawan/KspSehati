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

                $pinj = Pinjam::create([
                    "anggota_id" => $request->id,
                    "nilai_pinj" => $request->nilai_pinj,
                    "pk_kem" => $request->pk_kem,
                    "tipe_angs" => $request->tipe_angsminan,
                    "ad_ar" => $request->ad_ar,
                    "jumlah_angs" => $request->jumlah_angs,
                    "periode" => $request->periode,
                    "per_p" => $request->per_p,
                    "angsuran" => $request->angsuran,
                    "kategori" => $request->kategori,
                    "admin_total" => $request->admin_total,
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
