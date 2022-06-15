<?php

namespace App\Http\Controllers;

use App\Models\Berkas;
use App\Models\Fisik_image;
use App\Models\Surat_image;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DownloadController extends Controller
{
    public function dberkas($berkas)
    {
        $path = public_path('berkas_order/' . $berkas);
        return response()->download($path);
    }

    public function hberkas($id)
    {
        $b = Berkas::where('id', $id)->first();
        // dd($b->berkas);
        File::delete('berkas_order/' . $b->berkas);
        Berkas::destroy($id);

        return redirect()->back()->with('success', 'Berkas Berhasil hapus');
    }

    public function dfisik($fisik)
    {
        $path = public_path('fisik_order/' . $fisik);
        return response()->download($path);
    }

    public function hfisik($id)
    {
        $b = Fisik_image::where('id', $id)->first();
        // dd($b->fisik);
        File::delete('fisik_order/' . $b->fisik_image);
        Fisik_image::destroy($id);

        return redirect()->back()->with('success', 'Berkas Berhasil hapus');
    }

    public function dsurat($surat)
    {
        $path = public_path('surat_order/' . $surat);
        return response()->download($path);
    }

    public function hsurat($id)
    {
        $b = Surat_image::where('id', $id)->first();
        // dd($b->surat);
        File::delete('surat_order/' . $b->surat_image);
        Surat_image::destroy($id);

        return redirect()->back()->with('success', 'Berkas Berhasil hapus');
    }
}
