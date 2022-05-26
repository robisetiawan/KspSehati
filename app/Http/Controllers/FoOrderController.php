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
                    "no_order" => date('dmy') . "OR" . $request->id,
                    "anggota_id" => $request->id,
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
            'no_identitas' => 'required|min:16|max:16',
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
        ];

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
            "status" => 'required',
            "tipe_order" => 'nullable',
            "paltform" => 'nullable',
            "keperluan" => 'nullable',
            "catatan" => 'nullable'
        ];

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
            "anggotas" => Order::all()
        ]);
    }

    public function caristrukturkredit(Request $request)
    {
        $cari = $request->cari;

        $orders = Order::where('no_order', 'like', "%" . $cari . "%")->get();
        // $identities = Identity::where('id', 'like', "%" . $anggotas->identity->id . "%")->get();

        $title = "Struktur Kredit by Angsuran";

        return view(
            'dashboard.fo.struktur-kredit-cari',
            compact('anggotas', 'title')
        );
    }
}
