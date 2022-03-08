<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Psy\CodeCleaner\FunctionReturnInWriteContextPass;

class EditOrderControllerFO extends Controller
{
    public function datapelanggan()
    {
        return view('fo.editorder.datapelanggan-VFO',[
        "title" => "Data Pelanggan"
        ]);
    }

    public function dataorder()
    {
        return view('fo.editorder.dataorder-VFO',[
            "title" => "Data Order"
        ]);
    }

    public function kondisiunit()
    {
        return view('fo.editorder.kondisiunit-VFO',[
            "title" => "Kondisi Unit"
        ]);
    }

    public function rekaptransaksi()
    {
        return view('fo.editorder.rekaptransaksi-VFO',[
            "title" => "Rekap Transaksi"
        ]);
    }

    public function datatambahan ()
    {
        return view('fo.editorder.datatambahan-VFO',[
            "title" => "Data Tambahan"
        ]);
    }

    public function dataextra ()
    {
        return view('fo.editorder.dataextra-VFO',[
            "title" => "Data Extra"
        ]);
    }

    public function las ()
    {
        return view('fo.editorder.las-VFO',[
            "title" => "LAS"
        ]);
    }

}
