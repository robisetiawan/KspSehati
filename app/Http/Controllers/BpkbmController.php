<?php

namespace App\Http\Controllers;

use App\Models\Bpkb_m;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BpkbmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.fo.bpkb-masuk.bpkbs', [
            'title' => 'Bpkb Masuk',
            'bpkbms' => Bpkb_m::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
            'order_id' => 'nullable',
            'penyerah' => 'required',
            'dtrm_olh' => 'required',
            'foto' => 'nullable',
            'status' => 'nullable'
        ]);

        $validatedData['order_id'] = $request->order_id;
        $validatedData['status'] = 'Belum Diserahkan Ke Pemilik';

        if ($request->file('foto')) {
            $validatedData['foto'] = $request->file('foto')->store('bpkbm-images');
        }

        Bpkb_m::create($validatedData);

        return redirect('/dashboard/bpkb-masuk')->with('success', 'Data Berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bpkb_m  $bpkb_m
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $a = Bpkb_m::where('id', $id)->first();
        return view('dashboard.fo.bpkb-masuk.show-bpkbm', [
            'title' => 'Bpkb Masuk',
            'bpkbm' => $a
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bpkb_m  $bpkb_m
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('dashboard.fo.bpkb-masuk.edit-bpkbm', [
            'title' => 'Edit Bpkb Masuk',
            'bpkbm' => Bpkb_m::where('id', $id)->first()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bpkb_m  $bpkb_m
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = [
            'status' => 'required',
            'penyerah' => 'required',
            'dtrm_olh' => 'required',
            'foto' => 'image|nullable'
        ];

        $validatedData = $request->validate($rules);

        if ($request->file('foto')) {
            if ($request->oldFoto) {
                Storage::delete($request->oldFoto);
            }
            $validatedData['foto'] = $request->file('foto')->store('bpkbm-images');
        }

        Bpkb_m::where('id', $id)
            ->update($validatedData);

        return redirect('/dashboard/bpkb-masuk')->with('success', 'Data Berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bpkb_m  $bpkb_m
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $b = Bpkb_m::where('id', $id)->first();
        if ($b->foto) {
            Storage::delete($b->foto);
        }
        Bpkb_m::destroy($id);

        return redirect('/dashboard/bpkb-masuk')->with('success', 'Data Berhasil dihapus');
    }
}
