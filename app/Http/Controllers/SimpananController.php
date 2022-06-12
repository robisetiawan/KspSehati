<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use App\Models\Cash_in;
use App\Models\Simpanan;
use Illuminate\Http\Request;

class SimpananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.fo.simpanan.simpanans', [
            "title" => "Tambah Simpanan",
            "simpanans" => Simpanan::latest()->get()
        ]);
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
        $validData = $request->validate([
            'simp_wj' => 'required',
            'anggota_id' => 'nullable',
            'jmlh_simpwj' => 'nullable'
        ]);

        $simpwj = $request->validate([
            'simpwj' => 'nullable'
        ]);

        //Currency
        $deleteRp = array(
            "Rp", ".", " "
        );

        $simp_wjRp = str_replace($deleteRp, "", $request->simp_wj);
        $simp = (int)$simp_wjRp;

        $validData['simp_wj'] = $simp;
        $validData['anggota_id'] = $request->id;

        $simpwj['simpwj'] = $request->simpwj + $simp;
        $validData['jmlh_simpwj'] = $request->simpwj + $simp;

        $simpid = Simpanan::create($validData);
        Cash_in::create([
            'simpanan_id' => $simpid->id,
            'total' => $simp
        ]);

        Anggota::where('id', $request->id)
            ->update($simpwj);

        return redirect('/dashboard/tambah-simpanan')->with('succes', 'berhasil');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Simpanan  $simpanan
     * @return \Illuminate\Http\Response
     */
    public function show(Simpanan $simpanan, $id)
    {

        // dd($simpanan, $id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Simpanan  $simpanan
     * @return \Illuminate\Http\Response
     */
    public function edit(Simpanan $simpanan, $id)
    {
        $a = Simpanan::where('id', $id)->first();
        // $ad = $a->id;
        // dd($a);
        return view('dashboard.fo.simpanan.edit-simpanan', [
            "title" => "Penerimaan Uang",
            'simpanan' => $a,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Simpanan  $simpanan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Simpanan $simpanan, $id)
    {
        // dd($id);
        $a = Simpanan::where('id', $id)->first();

        $validData = $request->validate([
            'simp_wj' => 'required',
            'jmlh_simpwj' => 'required',
            'simpwj' => 'required'
        ]);

        $simpAg = $request->validate([
            'simpwj' => 'required',
        ]);

        //Currency
        $deleteRp = array(
            "Rp", ".", " "
        );

        $simp_wjRp = str_replace($deleteRp, "", $request->simp_wj);
        $jmRp = str_replace($deleteRp, "", $request->jmlh_simpwj);
        $simpwjRp = str_replace($deleteRp, "", $request->simpwj);

        // dd(gettype($validData['simpwj']));
        $simp = (int)$simp_wjRp;
        $jmlsw = (int)$jmRp;
        $simptbag = (int)$simpwjRp;

        $jmlhsimp = $jmlsw + $simp - $a->simp_wj;
        $simpwj = $simptbag + $simp - $a->simp_wj;

        //endCUrrency
        Simpanan::where('id', $a->id)
            ->update([
                'simp_wj' => $simp,
                'jmlh_simpwj' => $jmlhsimp
            ]);

        Cash_in::where('simpanan_id', $a->id)
            ->update(['total' => $simp]);

        Anggota::where('id', $request->id_anggota)
            ->update([
                'simpwj' => $simpwj
            ]);

        return redirect('/dashboard/tambah-simpanan')->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Simpanan  $simpanan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Simpanan $simpanan, $id)
    {
        Simpanan::destroy($id);
        Cash_in::where('simpanan_id', $id)
            ->delete();

        return redirect('/dashboard/tambah-simpanan')->with('success', 'Data Berhasil dihapus');
    }

    public function crianggota()
    {

        return view('dashboard.fo.simpanan.create-simpanan', [
            "title" => "Tambah Simpanan",
            "anggotas" => Anggota::all()
        ]);
    }

    public function cari(Request $request)
    {
        $cari = $request->cari;

        $anggotas = Anggota::where('no_anggota', 'like', "%" . $cari . "%")->get();
        // $identities = Identity::where('id', 'like', "%" . $anggotas->identity->id . "%")->get();

        $title = "Tambah Simpanan";

        return view(
            'dashboard.fo.simpanan.create-simpanan-cari',
            compact('anggotas', 'title')
        );
    }
}
