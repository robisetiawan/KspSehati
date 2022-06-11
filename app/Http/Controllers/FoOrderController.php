<?php

namespace App\Http\Controllers;

use App\Models\Las;
use App\Models\User;
use App\Models\Order;
use App\Models\Barang;
use App\Models\Pinjam;
use App\Models\Adddata;
use App\Models\Anggota;
use App\Models\History;
use App\Models\Jaminan;
use App\Models\Identity;
use App\Models\Simpanan;
use App\Models\Profession;
use App\Models\Kondisi_unit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FoOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.fo.orders.orders', [
            "title" => "Orders",
            "orders" => Order::latest()->get(),
            // "anggotas" => Anggota::with(['user', 'order'])->latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('dashboard.fo.pooling-order', [
        //     'title' => 'Tambah Anggota',
        //     'anggotas' => Order::all()
        // ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $order = $request->validate([
        //     ''
        // ])
        // $anggota = Anggota::all();

        // dd($request);

        $createorder = DB::transaction(
            function () use ($request) {

                $validatedData = $request->validate([
                    'anggota_id' => 'required|unique:orders',
                    'buss_unit' => "required",
                    'barang' => "required",
                    'ada_jaminan' => "nullable",
                    'no_polisi' => "required",
                    'no_mesin' => "required",
                    'bpkb' => "required",
                    'stnk_ada' => "nullable",
                ]);

                $jaminan = Jaminan::create([
                    "barang" => $request->barang,
                    "buss_unit" => $request->buss_unit,
                    "ada_jaminan" => "Ada Jaminan",
                    "no_polisi" => $request->no_polisi,
                    "no_mesin" => $request->no_mesin
                ]);

                $barang = Barang::create([
                    "bpkb" => $request->bpkb,
                    "stnk_ada" => "Ada"
                ]);

                $kondisi_unit = Kondisi_unit::create([
                    "id" => $barang->id
                ]);

                $las = Las::create([
                    "id" => $barang->id
                ]);

                $pinjam = Pinjam::create([
                    "id" => $barang->id,
                    "anggota_id" => $request->anggota_id
                ]);

                $history = Simpanan::create([
                    "id" => $barang->id,
                    "anggota_id" => $request->anggota_id
                ]);


                $order = Order::create([
                    "no_order" => date('dmy') . "OR" . $request->anggota_id,
                    "anggota_id" => $request->anggota_id,
                    "jaminan_id" => $jaminan->id,
                    "barang_id" => $barang->id,
                    "kondisi_unit_id" => $kondisi_unit->id,
                    "las_id" => $las->id,
                    "pinjam_id" => $pinjam->id,
                    "history_id" => $history->id,
                ]);
            }
        );

        return redirect('/dashboard/orders')->with('success', 'Berhasil menambahkan order');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        dd($order);
        return view('anggota', [
            "title" => "Edit Order",
            "orders" => $order,

        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        return view('dashboard.fo.orders.edit-order', [
            'title' => 'Edit Order',
            'order' => $order,
            'orders' => Order::all(),
            "pinlatest" => Pinjam::where('anggota_id', $order->anggota->id)->latest()->first()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {

        // Users
        $user = [
            'name' => 'required|max:255',
        ];

        //identitas
        $identity = [
            'type_identitas' => 'required',
            'no_identitas' => 'required',
            "warganegara" => 'required',
            "agama" => 'required',
            "pendidikan" => 'required',
            //     "gelar" => 'nullable',
            //     "status_kawin" => 'required',
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

        //jaminan
        $jaminan = [
            "ada_jaminan" => 'nullable',
            "kepemilikan" => 'nullable',
            "buss_unit" => 'nullable',
            "barang" => 'nullable',
            "tipe" => 'nullable',
            "tahun" => 'nullable',
            "awalorakhir" => 'nullable',
            "harga_pasar" => 'nullable'

        ];

        //barang
        $barang = [
            "bpkb" => 'nullable',
            "stnk_ada" => 'nullable',
            "faktur" => 'nullable',
            "jatuh_tempo_stnk" => 'nullable',
            "surat_jual_beli" => 'nullable',
            "stnk_mati_tahun" => 'nullable',
        ];

        $kondisi_unit = [
            "kategori_m" => 'nullable',
            "suara_m" => 'nullable',
            "sayap_b" => 'nullable',
            "cover_b" => 'nullable',
            "knalpot" => 'nullable',
            "accu_aki" => 'nullable',
            "cakram" => 'nullable',
            "speedometer" => 'nullable',
            "kick_s" => 'nullable',
            "velg_ban" => 'nullable',
            "shockbreaker" => 'nullable',
            "spion" => 'nullable',
            "kaki" => 'nullable',
            "jok" => 'nullable',
            "lampu_sign" => 'nullable',
            "pk_stnk" => 'nullable',
            "hrgpk_stnk" => 'nullable',
            "pk_kondisi" => 'nullable',
            "hrgpk_kondisi" => 'nullable',
            // "m_kend" => 'nullable',
            // "a_man" => 'nullable',
            // "a_opt" => 'nullable',
        ];

        // if ($request->password) {
        //     $validuser['password'] = bcrypt($request->password);
        // }

        // $kondisi_unit['m_kend'] = $request->kategori_m === 'Baik' ? '100' : '0';

        $las = [
            "sewa_rumah" => 'nullable',
            "per" => 'nullable',
            "mobil" => 'nullable',
            "kulkas" => 'nullable',
            "ac" => 'nullable',
            "furniture" => 'nullable',
            "motor" => 'nullable',
            "tv" => 'nullable',
            "dvd" => 'nullable',
            "jarak_rk" => 'nullable',
            "rumah" => 'nullable',
            "tetangga_kanan" => 'nullable',
            "tetangga_kiri" => 'nullable',
        ];

        $pinjam = [
            "nilai_pinj" => 'nullable',
            "pk_kem" => 'nullable',
            "tipe_angs" => 'nullable',
            "jumlah_angs" => 'nullable',
            "periode" => 'nullable',
            "per_p" => 'nullable',
            "angsuran" => 'nullable',
            "admin_total" => 'nullable',
            "harga_acuan" => 'nullable',
            "bunga_margin" => 'nullable',
            "pk_marg" => 'nullable',
            "pinj_terakhir" => 'nullable',
            "simp_kok" => 'nullable',
            "nilai_terima" => 'nullable',
            "bunga" => 'nullable',
        ];

        //order
        $orders = [
            "status" => 'nullable',
            "tipe_order" => 'nullable',
            "platform" => 'nullable',
            "keperluan" => 'nullable',
            "catatan" => 'nullable',
            "catt_survey" => 'nullable'
        ];




        // dd($kondisi_unit);

        $validuser = $request->validate($user);
        $valididentity = $request->validate($identity);
        $validprofession = $request->validate($profession);
        $validadddata = $request->validate($adddata);
        $validanggotas = $request->validate($anggotas);
        $validjaminan = $request->validate($jaminan);
        $validbarang = $request->validate($barang);
        $validkondisi_unit = $request->validate($kondisi_unit);
        $validlas = $request->validate($las);
        $validorder = $request->validate($orders);
        $validpinjam = $request->validate($pinjam);

        //Currency
        $deleteRp = array(
            "Rp", ".", " "
        );

        $omsetRp = str_replace($deleteRp, "", $request->omset_dagang);
        $pendapatanRp = str_replace($deleteRp, "", $request->pendapatan);
        $gajiRp = str_replace($deleteRp, "", $request->gaji);
        $pendapatan_psgRp = str_replace($deleteRp, "", $request->pendapatan_psg);
        $pendapatan_lainRp = str_replace($deleteRp, "", $request->pendapatan_lain);
        $biaya_bulananRp = str_replace($deleteRp, "", $request->biaya_bulanan);
        $harga_pasarRp = str_replace($deleteRp, "", $request->harga_pasar);
        $sewa_rumahRp = str_replace($deleteRp, "", $request->sewa_rumah);

        $validprofession['omset_dagang'] = (int)$omsetRp;
        $validprofession['pendapatan'] = (int)$pendapatanRp;
        $validprofession['gaji'] = (int)$gajiRp;
        $validprofession['pendapatan_psg'] = (int)$pendapatan_psgRp;
        $validprofession['pendapatan_lain'] = (int)$pendapatan_lainRp;
        $validprofession['biaya_bulanan'] = (int)$biaya_bulananRp;
        $validjaminan['harga_pasar'] = (int)$harga_pasarRp;
        $validsewa_rumah['sewa_rumah'] = (int)$sewa_rumahRp;
        //endCurrency

        //struktur kredit by angsuran
        $nilai_pinjRp = str_replace($deleteRp, "", $request->nilai_pinj);
        // $pk_kemRp = str_replace($deleteRp, "", $request->pk_kem);
        $admin_totalRp = str_replace($deleteRp, "", $request->admin_total);

        $validpinjam['nilai_pinj'] = (int)$nilai_pinjRp;
        $validpinjam['admin_total'] = (int)$admin_totalRp;

        $pokok_kembali = (int)$nilai_pinjRp + (int)$admin_totalRp;

        $validpinjam['pk_kem'] = $pokok_kembali;
        $validpinjam['tipe_angs'] = 'Tetap';
        $validpinjam['per_p'] = 'Bulan';


        $bungafloat = floatval($request->bunga);
        if ($request->bunga) {
            $validpinjam['bunga'] = $bungafloat;
        }

        if ($request->bunga && $pokok_kembali !== null && $request->periode && $request->jumlah_angs) {
            $b_margin = ($pokok_kembali * $bungafloat / 100) * $request->periode;

            if ($b_margin > 100000) {
                $desimal = $b_margin / 100000;
                $b_marg = number_format($desimal, 2) * 100000;
            } elseif ($b_margin > 1000000) {
                $desimal = $b_margin / 1000000;
                $b_marg = number_format($desimal, 2) * 1000000;
            } else {
                $desimal = $b_margin / 10000;
                $b_marg = number_format($desimal, 2) * 10000;
            }

            $validpinjam['bunga_margin'] = $b_marg;
            $pokokplusmargin = $pokok_kembali + $b_marg;
            $validpinjam['pk_marg'] = $pokokplusmargin;
            $validpinjam['angsuran'] =  $pokokplusmargin / $request->jumlah_angs;
        } elseif ($pokok_kembali == null) {
            $validpinjam['bunga_margin'] = null;
            $validpinjam['pk_marg'] = null;
            $validpinjam['angsuran'] =  null;
        } else;

        // dd($validpinjam);
        //end struktur kredit by angsuran


        $k_mesin = $request->kategori_m === 'Baik' ? '70' : '0';
        $s_mesin = $request->suara_m === 'Halus' ? '30' : '0';

        $j_m_kend = $k_mesin + $s_mesin;

        if ($request->kategori_m) {
            $validkondisi_unit['m_kend'] = $j_m_kend;
        }
        // if ($order->barang->stnk_mati_tahun != null) {
        //     { if ($order->barang->stnk_mati_tahun == 1 )
        //         $validkondisi_unit['pk_stnk'] = 4;
        //     elseif }
        // }

        $ks = $request->kick_s === 'Ada' ? '30' : '0';
        $a_a = $request->accu_aki === 'Ada' ? '11.25' : '0';
        $s_b = $request->sayap_b === 'Ada' ? '11.25' : '0';
        $c_b = $request->cover_b === 'Ada' ? '11.25' : '0';
        $kn = $request->knalpot === 'Orisinil' ? '11.25' : '0';
        $ck = $request->cakram === 'Ada/Model Tidak Bercakram' ? '10' : '0';
        $sp = $request->speedometer === 'Ada' ? '5' : '0';
        $v_b = $request->velg_ban === 'Standar' ? '5' : '0';
        $sh = $request->shockbreaker === 'Standar' ? '5' : '0';

        $j_a_man = $a_a + $ks + $ck + $s_b + $c_b + $kn + $sp + $v_b + $sh;

        if ($request->accu_aki) {
            $validkondisi_unit['a_man'] = $j_a_man;
        }

        $spion = $request->spion === 'Ada' ? '25' : '0';
        $kaki = $request->kaki === 'Ada' ? '25' : '0';
        $jok = $request->jok === 'Orisinil' ? '25' : '0';
        $l_sign = $request->lampu_sign === 'Ada' ? '25' : '0';

        $j_a_opt = $spion + $kaki + $jok + $l_sign;

        if ($request->spion) {
            $validkondisi_unit['a_opt'] = $j_a_opt;
        }
        if ($request->spion) {
            $validkondisi_unit['grade_desc'] = ($j_m_kend + $j_a_man + $j_a_opt) / 3;
        }

        //pengurangan kondisi unit
        $a = $request->kategori_m === 'Baik' ? '0' : '30';
        $b = $request->suara_m === 'Halus' ? '0' : '15';
        //
        $c = $request->kick_s === 'Ada' ? '0' : '20';
        $d = $request->accu_aki === 'Ada' ? '0' : '10';
        $e = $request->sayap_b === 'Ada' ? '0' : '10';
        $f = $request->cover_b === 'Ada' ? '0' : '10';
        $g = $request->knalpot === 'Orisinil' ? '0' : '10';
        $h = $request->cakram === 'Ada/Model Tidak Bercakram' ? '0' : '8';
        $i = $request->speedometer === 'Ada' ? '0' : '5';
        $j = $request->velg_ban === 'Standar' ? '0' : '5';
        $k = $request->shockbreaker === 'Standar' ? '0' : '5';
        //
        $l = $request->spion === 'Ada' ? '0' : '5';
        $m = $request->kaki === 'Ada' ? '0' : '5';
        $n = $request->jok === 'Orisinil' ? '0' : '5';
        $o = $request->lampu_sign === 'Ada' ? '0' : '5';

        $jmlpku = $a + $b + $c + $d + $e + $f + $g + $h + $i + $j + $k + $l + $m + $n + $o;

        $validkondisi_unit['pk_kondisi'] = $jmlpku;
        $validkondisi_unit['hrgpk_kondisi'] = ((int)$harga_pasarRp * $jmlpku) / 100;
        //end pengurangan unit

        //pengurangan kondisi stnk
        if ($request->stnk_mati_tahun == 1)
            $pk_stnk = 4;
        elseif ($request->stnk_mati_tahun == 2)
            $pk_stnk = 8;
        elseif ($request->stnk_mati_tahun == 3)
            $pk_stnk = 16;
        elseif ($request->stnk_mati_tahun == 4)
            $pk_stnk = 20;
        else
            $pk_stnk = 25;

        $validkondisi_unit['pk_stnk'] = $pk_stnk;
        $validkondisi_unit['hrgpk_stnk'] = ((int)$harga_pasarRp * $pk_stnk) / 100;
        //endpengurangan

        $harga_kondisi = (int)$harga_pasarRp - ($validkondisi_unit['hrgpk_kondisi'] + $validkondisi_unit['hrgpk_stnk']);
        $validpinjam['harga_acuan'] = $harga_kondisi;
        $validpinjam['persentase'] = ($pokok_kembali / $harga_kondisi) * 100;

        // dd($validkondisi_unit);

        User::where('id', $order->anggota->user->id)
            ->update($validuser);
        Identity::where('id', $order->anggota->identity->id)
            ->update($valididentity);
        Profession::where('id', $order->anggota->profession->id)
            ->update($validprofession);
        Adddata::where('id', $order->anggota->adddata->id)
            ->update($validadddata);
        Anggota::where('id', $order->anggota->id)
            ->update($validanggotas);
        Jaminan::where('id', $order->jaminan->id)
            ->update($validjaminan);
        Barang::where('id', $order->barang->id)
            ->update($validbarang);
        Kondisi_unit::where('id', $order->kondisi_unit->id)
            ->update($validkondisi_unit);
        Las::where('id', $order->las->id)
            ->update($validlas);
        Pinjam::where('id', $order->pinjam->id)
            ->update($validpinjam);
        Order::where('id', $order->id)
            ->update($validorder);


        // return redirect('/dashboard/orders/1/edit')->with('success', 'Data Berhasil diupdate');
        // return redirect()->route('dashboard/orders/{{$order->id}}/edit', $order->id);
        return redirect()->back()->with('success', 'Data Berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        Order::destroy($order->id);
        Jaminan::destroy($order->jaminan->id);
        Barang::destroy($order->barang->id);
        Kondisi_unit::destroy($order->kondisi_unit->id);
        Las::destroy($order->las->id);

        return redirect('/dashboard/orders')->with('success', 'Data Berhasil dihapus');
    }

    public function poolingorder()
    {


        return view('dashboard.fo.orders.pooling-order', [
            "title" => "Pooling Order",
            "anggotas" => Anggota::all()
        ]);
    }

    public function caripoolingorder(Request $request)
    {
        $cari = $request->cari;

        $anggotas = Anggota::where('no_anggota', 'like', "%" . $cari . "%")->get();
        // $identities = Identity::where('id', 'like', "%" . $anggotas->identity->id . "%")->get();

        $title = "Pooling Order";

        return view(
            'dashboard.fo.orders.pooling-order-cari',
            compact('anggotas', 'title')
        );
    }

    public function strukturkredit()
    {
        return view('dashboard.fo.struktur-kredit', [
            "title" => "Struktur Kredit by Angsuran",
            "orders" => Order::all()
        ]);
    }

    public function caristrukturkredit(Request $request)
    {
        $cari = $request->cari;

        $orders = Order::where('no_order', 'like', "%" . $cari . "%")->get();

        $title = "Struktur Kredit by Angsuran";

        return view(
            'dashboard.fo.struktur-kredit-cari',
            compact('orders', 'title')
        );
    }
}
