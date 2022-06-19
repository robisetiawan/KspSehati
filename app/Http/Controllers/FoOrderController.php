<?php

namespace App\Http\Controllers;

use App\Models\Las;
use App\Models\User;
use App\Models\Order;
use App\Models\Barang;
use App\Models\Berkas;
use App\Models\Pinjam;
use App\Models\Adddata;
use App\Models\Anggota;
use App\Models\History;
use App\Models\Jaminan;
use App\Models\Employee;
use App\Models\Identity;
use App\Models\Simpanan;
use App\Models\Profession;
use App\Models\Fisik_image;
use App\Models\Surat_image;
use App\Models\Kondisi_unit;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rules\Enum;

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
                    'nama' => $request->name
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
        // dd($order);
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
            "pinlatest" => Pinjam::where('anggota_id', $order->anggota->id)->latest()->first(),
            'employees' => Employee::all(),
            'berkas' => Berkas::where('order_id', $order->id)->get(),
            'fisiks' => Fisik_image::where('order_id', $order->id)->get(),
            'surats' => Surat_image::where('order_id', $order->id)->get(),
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
        // dd($request->nilai_pinjaman);
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
            "catt_survey" => 'nullable',
            'employee_id' => 'nullable',
            'nama' => 'nullable'
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

        // dd($validpinjam);
        $validorder['employee_id'] = $request->employee_id;
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
        // $nilai_pinjRp = str_replace($deleteRp, "", $request->nilai_pinj);
        // $pk_kemRp = str_replace($deleteRp, "", $request->pk_kem);
        // $admin_totalRp = str_replace($deleteRp, "", $request->admin_total);

        //Admin Total & bunga
        //
        if ($request->nilai_pinj && $request->periode) {
            if ($request->nilai_pinj == 1000000 && $request->periode == 6) {
                $admin_total = 160000;
                $bunga = 3.937;
            } elseif ($request->nilai_pinj == 1000000 && $request->periode == 12) {
                $admin_total = 160000;
                $bunga = 3.822;
            } elseif ($request->nilai_pinj == 1000000 && $request->periode == 18) {
                $admin_total = 160000;
                $bunga = 3.841;
            }
            //======================================================================
            elseif ($request->nilai_pinj == 1250000 && $request->periode == 6) {
                $admin_total = 200000;
                $bunga = 3.937;
            } elseif ($request->nilai_pinj == 1250000 && $request->periode == 12) {
                $admin_total = 200000;
                $bunga = 3.822;
            } elseif ($request->nilai_pinj == 1250000 && $request->periode == 18) {
                $admin_total = 200000;
                $bunga = 3.841;
            }
            //=======================O O O O O O O O O O============================
            elseif ($request->nilai_pinj == 1500000 && $request->periode == 6) {
                $admin_total = 187500;
                $bunga = 3.778;
            } elseif ($request->nilai_pinj == 1500000 && $request->periode == 12) {
                $admin_total = 187500;
                $bunga = 3.696;
            } elseif ($request->nilai_pinj == 1500000 && $request->periode == 18) {
                $admin_total = 187500;
                $bunga = 3.689;
            }
            //======================================================================
            elseif ($request->nilai_pinj == 1750000 && $request->periode == 6) {
                $admin_total = 187500;
                $bunga = 3.778;
            } elseif ($request->nilai_pinj == 1750000 && $request->periode == 12) {
                $admin_total = 187500;
                $bunga = 3.696;
            } elseif ($request->nilai_pinj == 1750000 && $request->periode == 18) {
                $admin_total = 187500;
                $bunga = 3.689;
            }
            //=======================O O O O O O O O O O============================
            elseif ($request->nilai_pinj == 2000000 && $request->periode == 6) {
                $admin_total = 230000;
                $bunga = 3.692;
            } elseif ($request->nilai_pinj == 2000000 && $request->periode == 12) {
                $admin_total = 230000;
                $bunga = 3.595;
            } elseif ($request->nilai_pinj == 2000000 && $request->periode == 18) {
                $admin_total = 230000;
                $bunga = 3.637;
            }
            //======================================================================
            elseif ($request->nilai_pinj == 2250000 && $request->periode == 6) {
                $admin_total = 260000;
                $bunga = 3.692;
            } elseif ($request->nilai_pinj == 2250000 && $request->periode == 12) {
                $admin_total = 260000;
                $bunga = 3.595;
            } elseif ($request->nilai_pinj == 2250000 && $request->periode == 18) {
                $admin_total = 260000;
                $bunga = 3.637;
            }
            //=======================O O O O O O O O O O============================
            elseif ($request->nilai_pinj == 2500000 && $request->periode == 6) {
                $admin_total = 287500;
                $bunga = 3.602;
            } elseif ($request->nilai_pinj == 2500000 && $request->periode == 12) {
                $admin_total = 287500;
                $bunga = 3.577;
            } elseif ($request->nilai_pinj == 2500000 && $request->periode == 18) {
                $admin_total = 287500;
                $bunga = 3.628;
            }
            //======================================================================
            elseif ($request->nilai_pinj == 2750000 && $request->periode == 6) {
                $admin_total = 316250;
                $bunga = 3.602;
            } elseif ($request->nilai_pinj == 2750000 && $request->periode == 12) {
                $admin_total = 316250;
                $bunga = 3.577;
            } elseif ($request->nilai_pinj == 2750000 && $request->periode == 18) {
                $admin_total = 316250;
                $bunga = 3.628;
            }
            //=======================O O O O O O O O O O============================
            elseif ($request->nilai_pinj == 3000000 && $request->periode == 6) {
                $admin_total = 390000;
                $bunga = 3.215;
            } elseif ($request->nilai_pinj == 3000000 && $request->periode == 12) {
                $admin_total = 390000;
                $bunga = 3.348;
            } elseif ($request->nilai_pinj == 3000000 && $request->periode == 18) {
                $admin_total = 390000;
                $bunga = 3.324;
            }
            //======================================================================
            elseif ($request->nilai_pinj == 3250000 && $request->periode == 6) {
                $admin_total = 422500;
                $bunga = 3.215;
            } elseif ($request->nilai_pinj == 3250000 && $request->periode == 12) {
                $admin_total = 422500;
                $bunga = 3.348;
            } elseif ($request->nilai_pinj == 3250000 && $request->periode == 18) {
                $admin_total = 422500;
                $bunga = 3.324;
            }
            //=======================O O O O O O O O O O============================
            elseif ($request->nilai_pinj == 3500000 && $request->periode == 6) {
                $admin_total = 420000;
                $bunga = 3.180;
            } elseif ($request->nilai_pinj == 3500000 && $request->periode == 12) {
                $admin_total = 420000;
                $bunga = 3.325;
            } elseif ($request->nilai_pinj == 3500000 && $request->periode == 18) {
                $admin_total = 420000;
                $bunga = 3.296;
            }
            //======================================================================
            elseif ($request->nilai_pinj == 3750000 && $request->periode == 6) {
                $admin_total = 450000;
                $bunga = 3.180;
            } elseif ($request->nilai_pinj == 3750000 && $request->periode == 12) {
                $admin_total = 450000;
                $bunga = 3.325;
            } elseif ($request->nilai_pinj == 3750000 && $request->periode == 18) {
                $admin_total = 450000;
                $bunga = 3.296;
            }
            //=======================O O O O O O O O O O============================
            elseif ($request->nilai_pinj == 4000000 && $request->periode == 6) {
                $admin_total = 440000;
                $bunga = 3.108;
            } elseif ($request->nilai_pinj == 4000000 && $request->periode == 12) {
                $admin_total = 440000;
                $bunga = 3.176;
            } elseif ($request->nilai_pinj == 4000000 && $request->periode == 18) {
                $admin_total = 440000;
                $bunga = 3.296;
            }
            //======================================================================
            elseif ($request->nilai_pinj == 4250000 && $request->periode == 6) {
                $admin_total = 467500;
                $bunga = 3.108;
            } elseif ($request->nilai_pinj == 4250000 && $request->periode == 12) {
                $admin_total = 467500;
                $bunga = 3.176;
            } elseif ($request->nilai_pinj == 4250000 && $request->periode == 18) {
                $admin_total = 467500;
                $bunga = 3.296;
            }
            //=======================O O O O O O O O O O============================
            elseif ($request->nilai_pinj == 4500000 && $request->periode == 6) {
                $admin_total = 495000;
                $bunga = 3.073;
            } elseif ($request->nilai_pinj == 4500000 && $request->periode == 12) {
                $admin_total = 495000;
                $bunga = 3.138;
            } elseif ($request->nilai_pinj == 4500000 && $request->periode == 18) {
                $admin_total = 495000;
                $bunga = 3.273;
            }
            //======================================================================
            elseif ($request->nilai_pinj == 4750000 && $request->periode == 6) {
                $admin_total = 522500;
                $bunga = 3.073;
            } elseif ($request->nilai_pinj == 4750000 && $request->periode == 12) {
                $admin_total = 522500;
                $bunga = 3.138;
            } elseif ($request->nilai_pinj == 4750000 && $request->periode == 18) {
                $admin_total = 522500;
                $bunga = 3.273;
            }
            //=======================O O O O O O O O O O============================
            elseif ($request->nilai_pinj == 5000000 && $request->periode == 6) {
                $admin_total = 550000;
                $bunga = 3.081;
            } elseif ($request->nilai_pinj == 5000000 && $request->periode == 12) {
                $admin_total = 550000;
                $bunga = 3.162;
            } elseif ($request->nilai_pinj == 5000000 && $request->periode == 18) {
                $admin_total = 550000;
                $bunga = 3.291;
            }
            //======================================================================
            elseif ($request->nilai_pinj == 5250000 && $request->periode == 6) {
                $admin_total = 577500;
                $bunga = 3.081;
            } elseif ($request->nilai_pinj == 5250000 && $request->periode == 12) {
                $admin_total = 577500;
                $bunga = 3.162;
            } elseif ($request->nilai_pinj == 5250000 && $request->periode == 18) {
                $admin_total = 577500;
                $bunga = 3.291;
            }
            //=======================O O O O O O O O O O============================
            elseif ($request->nilai_pinj == 5500000 && $request->periode == 6) {
                $admin_total = 550000;
                $bunga = 3.152;
            } elseif ($request->nilai_pinj == 5500000 && $request->periode == 12) {
                $admin_total = 550000;
                $bunga = 3.287;
            } elseif ($request->nilai_pinj == 5500000 && $request->periode == 18) {
                $admin_total = 550000;
                $bunga = 3.370;
            }
            //======================================================================
            elseif ($request->nilai_pinj == 5750000 && $request->periode == 6) {
                $admin_total = 575000;
                $bunga = 3.152;
            } elseif ($request->nilai_pinj == 5750000 && $request->periode == 12) {
                $admin_total = 575000;
                $bunga = 3.287;
            } elseif ($request->nilai_pinj == 5750000 && $request->periode == 18) {
                $admin_total = 575000;
                $bunga = 3.370;
            }
            //=======================O O O O O O O O O O============================
            elseif ($request->nilai_pinj == 6000000 && $request->periode == 6) {
                $admin_total = 600000;
                $bunga = 3.136;
            } elseif ($request->nilai_pinj == 6000000 && $request->periode == 12) {
                $admin_total = 600000;
                $bunga = 3.273;
            } elseif ($request->nilai_pinj == 6000000 && $request->periode == 18) {
                $admin_total = 600000;
                $bunga = 3.369;
            }
            //======================================================================
            elseif ($request->nilai_pinj == 6250000 && $request->periode == 6) {
                $admin_total = 625000;
                $bunga = 3.136;
            } elseif ($request->nilai_pinj == 6250000 && $request->periode == 12) {
                $admin_total = 625000;
                $bunga = 3.273;
            } elseif ($request->nilai_pinj == 6250000 && $request->periode == 18) {
                $admin_total = 625000;
                $bunga = 3.369;
            }
            //=======================O O O O O O O O O O============================
            elseif ($request->nilai_pinj == 6500000 && $request->periode == 6) {
                $admin_total = 650000;
                $bunga = 3.138;
            } elseif ($request->nilai_pinj == 6500000 && $request->periode == 12) {
                $admin_total = 650000;
                $bunga = 3.275;
            } elseif ($request->nilai_pinj == 6500000 && $request->periode == 18) {
                $admin_total = 650000;
                $bunga = 3.382;
            }
            //======================================================================
            elseif ($request->nilai_pinj == 6750000 && $request->periode == 6) {
                $admin_total = 675000;
                $bunga = 3.138;
            } elseif ($request->nilai_pinj == 6750000 && $request->periode == 12) {
                $admin_total = 675000;
                $bunga = 3.275;
            } elseif ($request->nilai_pinj == 6750000 && $request->periode == 18) {
                $admin_total = 675000;
                $bunga = 3.382;
            }
            //=======================O O O O O O O O O O============================
            elseif ($request->nilai_pinj == 7000000 && $request->periode == 6) {
                $admin_total = 665000;
                $bunga = 3.138;
            } elseif ($request->nilai_pinj == 7000000 && $request->periode == 12) {
                $admin_total = 665000;
                $bunga = 3.278;
            } elseif ($request->nilai_pinj == 7000000 && $request->periode == 18) {
                $admin_total = 665000;
                $bunga = 3.381;
            }
            //======================================================================
            elseif ($request->nilai_pinj == 7250000 && $request->periode == 6) {
                $admin_total = 688750;
                $bunga = 3.138;
            } elseif ($request->nilai_pinj == 7250000 && $request->periode == 12) {
                $admin_total = 688750;
                $bunga = 3.278;
            } elseif ($request->nilai_pinj == 7250000 && $request->periode == 18) {
                $admin_total = 688750;
                $bunga = 3.381;
            }
            //=======================O O O O O O O O O O============================
            elseif ($request->nilai_pinj == 7500000 && $request->periode == 6) {
                $admin_total = 712500;
                $bunga = 3.145;
            } elseif ($request->nilai_pinj == 7500000 && $request->periode == 12) {
                $admin_total = 712500;
                $bunga = 3.271;
            } elseif ($request->nilai_pinj == 7500000 && $request->periode == 18) {
                $admin_total = 712500;
                $bunga = 3.382;
            }
            //======================================================================
            elseif ($request->nilai_pinj == 7750000 && $request->periode == 6) {
                $admin_total = 736250;
                $bunga = 3.145;
            } elseif ($request->nilai_pinj == 7750000 && $request->periode == 12) {
                $admin_total = 736250;
                $bunga = 3.271;
            } elseif ($request->nilai_pinj == 7750000 && $request->periode == 18) {
                $admin_total = 736250;
                $bunga = 3.382;
            }
            //=======================O O O O O O O O O O============================
            elseif ($request->nilai_pinj == 8000000 && $request->periode == 6) {
                $admin_total = 760000;
                $bunga = 3.105;
            } elseif ($request->nilai_pinj == 8000000 && $request->periode == 12) {
                $admin_total = 760000;
                $bunga = 3.219;
            } elseif ($request->nilai_pinj == 8000000 && $request->periode == 18) {
                $admin_total = 760000;
                $bunga = 3.337;
            }
            //======================================================================
            elseif ($request->nilai_pinj == 8250000 && $request->periode == 6) {
                $admin_total = 783750;
                $bunga = 3.105;
            } elseif ($request->nilai_pinj == 8250000 && $request->periode == 12) {
                $admin_total = 783750;
                $bunga = 3.219;
            } elseif ($request->nilai_pinj == 8250000 && $request->periode == 18) {
                $admin_total = 783750;
                $bunga = 3.337;
            }
            //=======================O O O O O O O O O O============================
            elseif ($request->nilai_pinj == 8500000 && $request->periode == 6) {
                $admin_total = 807500;
                $bunga = 3.113;
            } elseif ($request->nilai_pinj == 8500000 && $request->periode == 12) {
                $admin_total = 807500;
                $bunga = 3.227;
            } elseif ($request->nilai_pinj == 8500000 && $request->periode == 18) {
                $admin_total = 807500;
                $bunga = 3.340;
            }
            //======================================================================
            elseif ($request->nilai_pinj == 8750000 && $request->periode == 6) {
                $admin_total = 831250;
                $bunga = 3.113;
            } elseif ($request->nilai_pinj == 8750000 && $request->periode == 12) {
                $admin_total = 831250;
                $bunga = 3.227;
            } elseif ($request->nilai_pinj == 8750000 && $request->periode == 18) {
                $admin_total = 831250;
                $bunga = 3.340;
            }
            //=======================O O O O O O O O O O============================
            elseif ($request->nilai_pinj == 9000000 && $request->periode == 6) {
                $admin_total = 855000;
                $bunga = 3.110;
            } elseif ($request->nilai_pinj == 9000000 && $request->periode == 12) {
                $admin_total = 855000;
                $bunga = 3.224;
            } elseif ($request->nilai_pinj == 9000000 && $request->periode == 18) {
                $admin_total = 855000;
                $bunga = 3.333;
            }
            //======================================================================
            elseif ($request->nilai_pinj == 9250000 && $request->periode == 6) {
                $admin_total = 878750;
                $bunga = 3.110;
            } elseif ($request->nilai_pinj == 9250000 && $request->periode == 12) {
                $admin_total = 878750;
                $bunga = 3.224;
            } elseif ($request->nilai_pinj == 9250000 && $request->periode == 18) {
                $admin_total = 878750;
                $bunga = 3.333;
            }
            //=======================O O O O O O O O O O============================
            elseif ($request->nilai_pinj == 9500000 && $request->periode == 6) {
                $admin_total = 902500;
                $bunga = 3.117;
            } elseif ($request->nilai_pinj == 9500000 && $request->periode == 12) {
                $admin_total = 902500;
                $bunga = 3.222;
            } elseif ($request->nilai_pinj == 9500000 && $request->periode == 18) {
                $admin_total = 902500;
                $bunga = 3.327;
            }
            //======================================================================
            elseif ($request->nilai_pinj == 9750000 && $request->periode == 6) {
                $admin_total = 926250;
                $bunga = 3.117;
            } elseif ($request->nilai_pinj == 9750000 && $request->periode == 12) {
                $admin_total = 926250;
                $bunga = 3.222;
            } elseif ($request->nilai_pinj == 9750000 && $request->periode == 18) {
                $admin_total = 926250;
                $bunga = 3.327;
            }
            //=======================O O O O O O O O O O============================
            elseif ($request->nilai_pinj == 10000000 && $request->periode == 6) {
                $admin_total = 950000;
                $bunga = 3.123;
            } elseif ($request->nilai_pinj == 10000000 && $request->periode == 12) {
                $admin_total = 950000;
                $bunga = 3.219;
            } elseif ($request->nilai_pinj == 10000000 && $request->periode == 18) {
                $admin_total = 950000;
                $bunga = 3.330;
            }
            //======================================================================

            $validpinjam['nilai_pinj'] = (int)$request->nilai_pinj;
            $validpinjam['admin_total'] = $admin_total;

            $pokok_kembali = (int)$request->nilai_pinj + $admin_total;

            $validpinjam['pk_kem'] = $pokok_kembali;
            $validpinjam['tipe_angs'] = 'Tetap';
            $validpinjam['per_p'] = 'Bulan';

            $bungafloat = floatval($bunga);
            $validpinjam['bunga'] = $bungafloat;


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
            $validpinjam['angsuran'] =  $pokokplusmargin / $request->periode;
        } elseif ($request->nilai_pinj == null or $request->periode == null) {
            $validpinjam['nilai_pinj'] = $request->nilai_pinj or null;
            $validpinjam['admin_total'] = null;
            $validpinjam['periode'] = $request->periode or null;

            $validpinjam['pk_kem'] = null;
            $validpinjam['tipe_angs'] = 'Tetap';
            $validpinjam['per_p'] = 'Bulan';

            $validpinjam['bunga'] = null;
            $validpinjam['bunga_margin'] = null;
            $validpinjam['pk_marg'] = null;
            $validpinjam['angsuran'] =  null;
        } else;
        //
        // if ($request->bunga && $pokok_kembali !== null && $request->periode && $request->jumlah_angs) {
        //     $b_margin = ($pokok_kembali * $bungafloat / 100) * $request->periode;

        //     if ($b_margin > 100000) {
        //         $desimal = $b_margin / 100000;
        //         $b_marg = number_format($desimal, 2) * 100000;
        //     } elseif ($b_margin > 1000000) {
        //         $desimal = $b_margin / 1000000;
        //         $b_marg = number_format($desimal, 2) * 1000000;
        //     } else {
        //         $desimal = $b_margin / 10000;
        //         $b_marg = number_format($desimal, 2) * 10000;
        //     }

        //     $validpinjam['bunga_margin'] = $b_marg;
        //     $pokokplusmargin = $pokok_kembali + $b_marg;
        //     $validpinjam['pk_marg'] = $pokokplusmargin;
        //     $validpinjam['angsuran'] =  $pokokplusmargin / $request->jumlah_angs;
        // } elseif ($pokok_kembali == null) {
        //     $validpinjam['bunga_margin'] = null;
        //     $validpinjam['pk_marg'] = null;
        //     $validpinjam['angsuran'] =  null;
        // } else;

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

        if ($request->nilai_pinj && $request->periode) {
            $validpinjam['persentase'] = ($pokok_kembali / $harga_kondisi) * 100;
        } else {
            $validpinjam['persentase'] = null;
        }

        // dd($validkondisi_unit);

        //upload file
        if ($request->has('berkas')) {
            foreach ($request->file('berkas') as $b) {
                $name = 'b' . time() . $request->no_order . rand(1, 999) . '.' . $b->extension();
                $b->move(public_path('berkas_order'), $name);
                Berkas::create([
                    'order_id' => $order->id,
                    'berkas' => $name
                ]);
            }
        }
        if ($request->has('fisik')) {
            foreach ($request->file('fisik') as $f) {
                $name = 'f' . time() . $request->no_order . rand(1, 999) . '.' . $f->extension();
                $f->move(public_path('fisik_order'), $name);
                Fisik_image::create([
                    'order_id' => $order->id,
                    'fisik_image' => $name
                ]);
            }
        }
        if ($request->has('surat')) {
            foreach ($request->file('surat') as $s) {
                $name = 's' . time() . $request->no_order . rand(1, 999) . '.' . $s->extension();
                $s->move(public_path('surat_order'), $name);
                Surat_image::create([
                    'order_id' => $order->id,
                    'surat_image' => $name
                ]);
            }
        }
        //endUpload file

        $validorders['nama'] = $request->name;

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
