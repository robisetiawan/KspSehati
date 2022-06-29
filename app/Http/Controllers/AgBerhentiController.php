<?php

namespace App\Http\Controllers;

use App\Models\Pinjam;
use App\Models\Anggota;
use App\Models\Ag_Berhenti;
use Illuminate\Http\Request;

class AgBerhentiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('dashboard.fo.anggotas.stopout.agstopouts', [
            'title' => 'Anggota Berhenti',
            'anggotas' => Ag_Berhenti::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.fo.anggotas.stopout.create-agstopout', [
            'title' => 'Tambah Anggota Berhenti',
            'anggotas' => Anggota::all()
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
        Ag_Berhenti::create([
            'anggota_id' => $request->anggota_id,
        ]);

        Anggota::where('id', $request->anggota_id)
            ->update(['status' => 'Nonaktif']);

        return redirect('/dashboard/stop-out')->with('success', 'Data berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ag_Berhenti  $ag_Berhenti
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // dd($id);
        $anggota =  Anggota::where('id', $id)->first();
        // dd($anggota->id);
        return view('dashboard.fo.anggotas.stopout.show-agstopout', [
            "title" => "Detail Anggota",
            "anggotas" => $anggota,
            "pinjam" => Pinjam::where('anggota_id', $anggota->id)->latest()->get(),
            // "simpan" => Simpanan::where('anggota_id', $anggota->id)->latest()->get(),
            "pinlatest" => Pinjam::where('anggota_id', $anggota->id)->latest()->first()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ag_Berhenti  $ag_Berhenti
     * @return \Illuminate\Http\Response
     */
    public function edit(Ag_Berhenti $ag_Berhenti)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ag_Berhenti  $ag_Berhenti
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ag_Berhenti $ag_Berhenti)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ag_Berhenti  $ag_Berhenti
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ag = Ag_Berhenti::where('id', $id)->first();

        Ag_Berhenti::destroy($ag->id);

        Anggota::where('id', $ag->anggota_id)
            ->update(['status' => 'Aktif']);

        return redirect('/dashboard/stop-out')->with('success', 'Data berhasil dihapus');
    }
}
