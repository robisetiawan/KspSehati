<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use Illuminate\Http\Request;

class FoAnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.fo.anggotas.anggotas', [
            "title" => "Tampil Anggota",
            // "anggotas" => Anggota::all(),
            // "anggotas" => Anggota::latest()->get()
            "anggotas" => Anggota::with(['user', 'order'])->latest()->get() //tambahkn with agar tidk bnyk melakukan query (fiture=eager loading)

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.fo.anggotas.create-anggota', [
            'title' => 'Tambah Anggota',
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
        // $request['user_id'] = auth()->user()->id;    
        $validatedData = $request->validate([
            'nama_panggilan' => 'nullable',
            'jenis_kelamin' => 'nullable',
            'tempat_lahir' => 'nullable',
            'tanggal_lahir' => 'nullable',
            'nama_ibu' => 'nullable',
            'email' => 'required|email:dns|unique:users',
            'telepon_rumah' => 'min:10|max:12',
            'telepon_seluler' => 'min:10|max:12',
            'telepon_kantor' => 'min:10|max:12',
        ]);

        // $request['kode_produk'] = 'P' . tambah_nol_didepan((int)$produk->id_produk + 1, 6);

        $anggota = Anggota::latest()->first() ?? new Anggota();
        $validatedData['no_anggota'] = 'AKS' . $anggota->created_at->format('dmy') . $anggota->id;

        // dd($validatedData);
        Anggota::create($validatedData);

        return redirect('/dashboard/anggotas')->with('success', 'Berhasil menambahkan anggota');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Anggota  $anggota
     * @return \Illuminate\Http\Response
     */
    public function show(Anggota $anggota)
    {
        return view('dashboard.fo.anggotas.show-anggota', [
            "title" => "Detail Anggota",
            "anggotas" => $anggota
        ]);
    }

    // public function show($id)
    // {
    //     return view('anggota', [
    //         "title" => "Single Anggota",
    //         "anggota" => Anggota::find($id)
    //     ]);
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Anggota  $anggota
     * @return \Illuminate\Http\Response
     */
    public function edit(Anggota $anggota)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Anggota  $anggota
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Anggota $anggota)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Anggota  $anggota
     * @return \Illuminate\Http\Response
     */
    public function destroy(Anggota $anggota)
    {
        Anggota::destroy($anggota->id);

        return redirect('/dashboard/anggotas')->with('success', 'Anggota Berhasil dihapus');
    }
}
