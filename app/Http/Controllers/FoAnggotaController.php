<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Adddata;
use App\Models\Anggota;
use App\Models\Identity;
use App\Models\Profession;
use Illuminate\Http\Request;
use App\Exports\AnggotaExport;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Storage;
use Illuminate\Contracts\Support\ValidatedData;

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
        // $a = "Rp 8.000.000";
        // $deleteRp = array("Rp", ".", " ");

        // $omsetRp = str_replace($deleteRp, "", $a);
        // $intOmset = (int)$omsetRp;
        // dd($intOmset);
        // $omsetRp = "300";
        // $badChars = array("rp", ".", "(", ")");
        // $num = "rp.5.000.000";

        // $sds = str_replace($badChars, "", $num);

        $createanggota = DB::transaction(function () use ($request) {

            $validatedData = $request->validate([
                // Users
                'name' => 'required|max:255',
                'email' => 'nullable|email|unique:users',
                'password' => 'nullable|min:5|max:255',
                'image' => 'nullable|image',
                //identitas
                'type_identitas' => 'required',
                'no_identitas' => 'required',
                "warganegara" => 'required',
                "agama" => 'required',
                "pendidikan" => 'required',
                "gelar" => 'nullable',
                "status_kawin" => 'required',
                "gol_darah" => 'nullable',
                "status_rumah" => 'required',
                "alamat" => 'required',
                "rt" => 'required|max:3',
                "rw" => 'required|max:3',
                "desa_kel" => 'required',
                "kec" => 'required',
                "kab_kota" => 'required',
                "provinsi" => 'required',
                "kode_pos" => 'nullable',
                //profession
                "pekerjaan" => 'required',
                "lama_kerja_tahun" => 'nullable|max:2',
                "lama_kerja_bulan" => 'nullable|max:2',
                "tanggungan" => 'required',
                "omset_dagang" => 'nullable',
                "pendapatan" => 'nullable',
                "gaji" => 'nullable',
                "pendapatan_psg" => 'nullable',
                "pendapatan_lain" => 'nullable',
                "biaya_bulanan" => 'nullable',
                //adddata
                "nama" => 'nullable',
                "alamat_add" => 'nullable',
                "rt_add" => 'nullable',
                "rw_add" => 'nullable',
                "desa_kel_add" => 'nullable',
                "kec_add" => 'nullable',
                "kab_kota_add" => 'nullable',
                "provinsi_add" => 'nullable',
                "kode_pos_add" => 'nullable',
                "telepon_rumah_add" => 'nullable',
                "telepon_seluler_add" => 'nullable',
                //anggota
                "nama_panggilan" => 'required',
                "jenis_kelamin" => 'required',
                "tempat_lahir" => 'required',
                "tanggal_lahir" => 'required',
                "nama_ibu" => 'required',
                "telepon_rumah" => 'nullable|min:10|max:12',
                "telepon_seluler" => 'nullable|min:10|max:12',
                "telepon_kantor" => 'nullable|min:10|max:12',

            ]);


            if ($request->file('image')) {
                $request->image = $request->file('image')->store('profile-image');
            }

            // $num = "rp.5.000.000";

            // $sds = str_replace($deleteRp, "", $num);
            $deleteRp = array("Rp", ".", " ");

            $omsetRp = str_replace($deleteRp, "", $request->omset_dagang);
            $pendapatanRp = str_replace($deleteRp, "", $request->pendapatan);
            $gajiRp = str_replace($deleteRp, "", $request->gaji);
            $pendapatan_psgRp = str_replace($deleteRp, "", $request->pendapatan_psg);
            $pendapatan_lainRp = str_replace($deleteRp, "", $request->pendapatan_lain);
            $biaya_bulananRp = str_replace($deleteRp, "", $request->biaya_bulanan);

            $intOmset = (int)$omsetRp;
            $intpendapatan = (int)$pendapatanRp;
            $intgaji = (int)$gajiRp;
            $intpendapatan_psg = (int)$pendapatan_psgRp;
            $intpendapatan_lain = (int)$pendapatan_lainRp;
            $intbiaya_bulanan = (int)$biaya_bulananRp;

            // $gettype = gettype($intOmset);
            // $validatedData['password'] = bcrypt($validatedData['password']);
            // dd($intOmset);

            // User::create($validatedData);
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
                'image' => $request->image
            ]);

            $identity = Identity::create([
                "type_identitas" => $request->type_identitas,
                "no_identitas" => $request->no_identitas,
                "warganegara" => $request->warganegara,
                "agama" => $request->agama,
                "pendidikan" => $request->pendidikan,
                "gelar" => $request->gelar,
                "status_kawin" => $request->status_kawin,
                "gol_darah" => $request->gol_darah,
                "status_rumah" => $request->status_rumah,
                "alamat" => $request->alamat,
                "rt" => $request->rt,
                "rw" => $request->rw,
                "desa_kel" => $request->desa_kel,
                "kec" => $request->kec,
                "kab_kota" => $request->kab_kota,
                "provinsi" => $request->provinsi,
                "kode_pos" => $request->kode_pos
            ]);

            $profession = Profession::create([
                "pekerjaan" => $request->pekerjaan,
                "lama_kerja_tahun" => $request->lama_kerja_tahun,
                "lama_kerja_bulan" => $request->lama_kerja_bulan,
                "tanggungan" => $request->tanggungan,
                "omset_dagang" => $intOmset,
                "pendapatan" => $intpendapatan,
                "gaji" => $intgaji,
                "pendapatan_psg" => $intpendapatan_psg,
                "pendapatan_lain" => $intpendapatan_lain,
                "biaya_bulanan" => $intbiaya_bulanan
            ]);

            $adddata = Adddata::create([
                "nama" => $request->nama,
                "alamat_add" => $request->alamat_add,
                "rt_add" => $request->rt_add,
                "rw_add" => $request->rw_add,
                "desa_kel_add" => $request->desa_kel_add,
                "kec_add" => $request->kec_add,
                "kab_kota_add" => $request->kab_kota_add,
                "provinsi_add" => $request->provinsi_add,
                "kode_pos_add" => $request->kode_pos_add,
                "telepon_rumah_add" => $request->telepon_rumah_add,
                "telepon_seluler_add" => $request->telepon_seluler_add,

            ]);

            $anggota = Anggota::create([
                "user_id" => $user->id,
                "identity_id" => $identity->id,
                "profession_id" => $profession->id,
                "adddata_id" => $adddata->id,
                "no_anggota" => "AKS" . date('dmy') . $user->id,
                "nama_panggilan" => $request->nama_panggilan,
                "jenis_kelamin" => $request->jenis_kelamin,
                "tempat_lahir" => $request->tempat_lahir,
                "tanggal_lahir" => $request->tanggal_lahir,
                "nama_ibu" => $request->nama_ibu,
                "telepon_rumah" => $request->telepon_rumah,
                "telepon_seluler" => $request->telepon_seluler,
                "telepon_kantor" => $request->teleponkantorh,

            ]);
        });

        // dd($cobo);

        // $request['kode_produk'] = 'P' . tambah_nol_didepan((int)$produk->id_produk + 1, 6);

        // $anggotas = Anggota::latest()->first() ?? new Anggota();
        // $validatedData['no_anggota'] = 'AKS' . $anggotas->created_at->format('dmy') . $anggotas->id;

        // // dd($validatedData);
        // Anggota::create($validatedData);

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
        return view('dashboard.fo.anggotas.edit-anggota', [
            'title' => 'Edit Anggota',
            'anggota' => $anggota,
            'anggotas' => Anggota::all()
        ]);
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

        // Users
        $user = [
            'name' => 'required|max:255',
            // 'email' => 'nullable|email|unique:users,email',
            // 'password' => 'nullable|min:5|max:255',
            'image' => 'nullable|image',

        ];

        //identitas
        $identity = [
            'type_identitas' => 'required',
            'no_identitas' => 'required',
            "warganegara" => 'required',
            "agama" => 'required',
            "pendidikan" => 'required',
            "gelar" => 'nullable',
            "status_kawin" => 'required',
            "gol_darah" => 'nullable',
            "status_rumah" => 'required',
            "alamat" => 'required',
            "rt" => 'required|max:3',
            "rw" => 'required|max:3',
            "desa_kel" => 'required',
            "kec" => 'required',
            "kab_kota" => 'required',
            "provinsi" => 'required',
            "kode_pos" => 'nullable',
        ];

        //profession
        $profession = [
            "pekerjaan" => 'required',
            "lama_kerja_tahun" => 'nullable|max:2',
            "lama_kerja_bulan" => 'nullable|max:2',
            "tanggungan" => 'required',
            "omset_dagang" => 'nullable',
            "pendapatan" => 'nullable',
            "gaji" => 'nullable',
            "pendapatan_psg" => 'nullable',
            "pendapatan_lain" => 'nullable',
            "biaya_bulanan" => 'nullable',
        ];

        //adddata
        $adddata = [
            "nama" => 'nullable',
            "alamat_add" => 'nullable',
            "rt_add" => 'nullable',
            "rw_add" => 'nullable',
            "desa_kel_add" => 'nullable',
            "kec_add" => 'nullable',
            "kab_kota_add" => 'nullable',
            "provinsi_add" => 'nullable',
            "kode_pos_add" => 'nullable',
            "telepon_rumah_add" => 'nullable',
            "telepon_seluler_add" => 'nullable',
        ];

        //anggota
        $anggotas = [
            "nama_panggilan" => 'required',
            "jenis_kelamin" => 'required',
            "tempat_lahir" => 'required',
            "tanggal_lahir" => 'required',
            "nama_ibu" => 'required',
            "telepon_rumah" => 'nullable|min:10|max:12',
            "telepon_seluler" => 'nullable|min:10|max:12',
            "telepon_kantor" => 'nullable|min:10|max:12',

        ];

        if ($request->email != $anggota->user->email) {
            $user['email'] = 'nullable|unique:users';
        }

        // if ($request->password) {
        //     $user['password'] = 'required|min:5|max:255';
        // }

        // if ($request->password) {
        //     $user['password'] = bcrypt($request->password);
        // }

        // if ($request->password) {
        //     $user['password'] = ['nullable|min:5|max:255', bcrypt($request->password)];
        // }

        if ($request->password) {
            $user['password'] = 'nullable|min:5|max:255';
        }

        // $validatedData['password'] = bcrypt($validatedData['password']);
        // dd($user);


        $validuser = $request->validate($user);
        $valididentity = $request->validate($identity);
        $validprofession = $request->validate($profession);
        $validadddata = $request->validate($adddata);
        $validanggotas = $request->validate($anggotas);

        if ($request->password) {
            $validuser['password'] = bcrypt($request->password);
        }

        //currency
        $deleteRp = array("Rp", ".", " ");

        $omsetRp = str_replace($deleteRp, "", $request->omset_dagang);
        $pendapatanRp = str_replace($deleteRp, "", $request->pendapatan);
        $gajiRp = str_replace($deleteRp, "", $request->gaji);
        $pendapatan_psgRp = str_replace($deleteRp, "", $request->pendapatan_psg);
        $pendapatan_lainRp = str_replace($deleteRp, "", $request->pendapatan_lain);
        $biaya_bulananRp = str_replace($deleteRp, "", $request->biaya_bulanan);

        $validprofession['omset_dagang'] = (int)$omsetRp;
        $validprofession['pendapatan'] = (int)$pendapatanRp;
        $validprofession['gaji'] = (int)$gajiRp;
        $validprofession['pendapatan_psg'] = (int)$pendapatan_psgRp;
        $validprofession['pendapatan_lain'] = (int)$pendapatan_lainRp;
        $validprofession['biaya_bulanan'] = (int)$biaya_bulananRp;
        //endCurrency

        // dd($validprofession);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validuser['image'] = $request->file('image')->store('profile-image');
        }

        // dd($validuser, $valididentity, $validprofession, $validadddata,  $validanggotas);

        User::where('id', $anggota->user->id)
            ->update($validuser);
        Identity::where('id', $anggota->identity->id)
            ->update($valididentity);
        Profession::where('id', $anggota->profession->id)
            ->update($validprofession);
        Adddata::where('id', $anggota->adddata->id)
            ->update($validadddata);
        Anggota::where('id', $anggota->id)
            ->update($validanggotas);


        return redirect('/dashboard/anggotas')->with('success', 'Data Berhasil diupdate');
        // dd($validatedData);
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
        User::destroy($anggota->user->id);
        Identity::destroy($anggota->identity->id);
        Profession::destroy($anggota->profession->id);
        Adddata::destroy($anggota->adddata->id);

        return redirect('/dashboard/anggotas')->with('success', 'Anggota Berhasil dihapus');
    }

    public function AnggotaExport()
    {
        $export = new AnggotaExport([
            ['nama_panggilan', 'no_anggota']
        ]);

        return Excel::download(new $export, 'data-anggota.xlsx');
    }
}
