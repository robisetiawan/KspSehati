<?php

namespace App\Http\Controllers;

use App\Models\Bpkb_k;
use App\Models\Bpkb_m;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BpkbkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.fo.bpkb-keluar.bpkbs', [
            'title' => 'Bpkb Keluar',
            'bpkbks' => Bpkb_k::latest()->get()
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
        $validatedData = $request->validate([
            'penerima' => 'required',
            'dbrkn_olh' => 'required',
            'foto' => 'nullable|image'
        ]);

        if ($request->file('foto')) {
            $validatedData['foto'] = $request->file('foto')->store('bpkbk-images');
        }

        $b = Bpkb_k::create($validatedData);
        Bpkb_m::where('id', $request->bpkbm_id)
            ->update(['bpkbk_id' => $b->id]);

        $bpkbm = Bpkb_m::where('id', $request->bpkbm_id)->first();
        if ($bpkbm->bpkbk_id !== null) {
            Bpkb_m::where('id', $request->bpkbm_id)
                ->update(['status' => 'Sudah Diserahkan Ke Pemilik']);
        } else {
            Bpkb_m::where('id', $request->bpkbm_id)
                ->update(['status' => 'Belum Diserahkan Ke Pemilik']);
        }

        return redirect('/dashboard/bpkb-keluar')->with('success', 'Data Berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bpkb_k  $bpkb_k
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // return view('dashboard.fo.bpkb-keluar.show-bpkbk', [
        //     'title' => 'Detail Bpkb Keluar',
        //     'bpkbk' => Bpkb_k::where('id', $id)->get()
        // ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bpkb_k  $bpkb_k
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('dashboard.fo.bpkb-keluar.edit-bpkbk', [
            'title' => 'Edit Bpkb Keluar',
            'bpkbk' => Bpkb_k::where('id', $id)->first()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bpkb_k  $bpkb_k
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = [
            'penerima' => 'required',
            'dbrkn_olh' => 'required',
            'foto' => 'nullable|image'
        ];

        $validatedData = $request->validate($rules);

        if ($request->file('foto')) {
            if ($request->oldFoto) {
                Storage::delete($request->oldFoto);
            }
            $validatedData['foto'] = $request->file('foto')->store('bpkbk-images');
        }

        Bpkb_k::where('id', $id)
            ->update($validatedData);

        return redirect('/dashboard/bpkb-keluar')->with('success', 'Data Berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bpkb_k  $bpkb_k
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $b = Bpkb_k::where('id', $id)->first();
        if ($b->foto) {
            Storage::delete($b->foto);
        }
        Bpkb_k::destroy($id);

        Bpkb_m::where('bpkbk_id', $id)
            ->update(['status' => 'Belum Diserahkan Ke Pemilik']);

        return redirect('/dashboard/bpkb-keluar')->with('success', 'Data Berhasil dihapus');
    }
}
