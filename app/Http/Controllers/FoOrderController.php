<?php

namespace App\Http\Controllers;

use App\Models\Las;
use App\Models\User;
use App\Models\Order;
use App\Models\Barang;
use App\Models\Adddata;
use App\Models\Anggota;
use App\Models\Jaminan;
use App\Models\Identity;
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
                ]);

                $jaminan = Jaminan::create([
                    "barang" => $request->barang,
                    "buss_unit" => $request->buss_unit,
                    "ada_jaminan" => $request->ada_jaminan,
                    "no_polisi" => $request->no_polisi,
                    "no_mesin" => $request->no_mesin
                ]);

                $barang = Barang::create([
                    "bpkb" => $request->bpkb,
                    "stnk_ada" => $request->stnk_ada
                ]);

                $kondisi_unit = Kondisi_unit::create([
                    "id" => $barang->id
                ]);

                $las = Las::create([
                    "id" => $barang->id
                ]);

                $order = Order::create([
                    "no_order" => date('dmy') . "OR" . $request->anggota_id,
                    "anggota_id" => $request->anggota_id,
                    "jaminan_id" => $jaminan->id,
                    "barang_id" => $barang->id,
                    "kondisi_unit_id" => $kondisi_unit->id,
                    "las_id" => $las->id
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
        return view('anggota', [
            "title" => "Edit Order",
            "orders" => $order
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
            'orders' => Order::all()
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
            "ada_jaminan" => 'required',
            "kepemilikan" => 'required',
            "buss_unit" => 'required',
            "barang" => 'required',
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

        //order
        $orders = [
            "status" => 'nullable',
            "tipe_order" => 'nullable',
            "platform" => 'nullable',
            "keperluan" => 'nullable',
            "catatan" => 'nullable'
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

        $k_mesin = $request->kategori_m === 'Baik' ? '50' : '0';
        $s_mesin = $request->suara_m === 'Halus' ? '50' : '0';

        $j_m_kend = $k_mesin + $s_mesin;

        if ($request->kategori_m) {
            $validkondisi_unit['m_kend'] = $j_m_kend;
        }

        $a_a = $request->accu_aki === 'Ada' ? '20' : '0';
        $ks = $request->kick_s === 'Ada' ? '20' : '0';
        $ck = $request->cakram === 'Ada/Model Tidak Bercakram' ? '15' : '0';
        $s_b = $request->sayap_b === 'Ada' ? '7.5' : '0';
        $c_b = $request->cover_b === 'Ada' ? '7.5' : '0';
        $kn = $request->knalpot === 'Orisinil' ? '7.5' : '0';
        $sp = $request->speedometer === 'Ada' ? '7.5' : '0';
        $v_b = $request->velg_ban === 'Standar' ? '7.5' : '0';
        $sh = $request->shockbreaker === 'Standar' ? '7.5' : '0';

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
        Order::where('id', $order->id)
            ->update($validorder);


        return redirect('/dashboard/orders')->with('success', 'Data Berhasil diupdate');
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
