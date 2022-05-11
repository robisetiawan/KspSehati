<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    // public function anggota()
    // {
    //     return view('fo.anggota-VFO', [
    //         "title" => "Anggota"
    //     ]);
    // }

    public function index()
    {
        // $data = User::find($id);
        // dd($data);
        return view('dashboard.profile', [
            "title" => "Profile",
        ]);
    }

    public function updateprofile(Request $request, User $user)
    {

        $rules = [
            'name'  => 'required|min:3|max:100',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'image' => 'image|file|max:10000',
        ];

        $validatedData = $request->validate($rules);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('profile-image');
        }

        // $data = $request->all();

        User::where('id', $user->id)
            ->update($validatedData);

        return redirect()->back()->with([
            'status' => 'Profile Berhasil Diupdate'
        ]);
    }

    public function setting()
    {
        return view('dashboard.setting', [
            "title" => "Setting"
        ]);
    }

    public function updatesetting(Request $request, User $user)
    {
        $request->validate([
            'password' => ['required', 'min:5'],
            'konfirmasi_password' => ['same:password'],
        ]);

        $user->update(['password' => Hash::make($request->password)]);
        return redirect()->back()->with(['success' => 'Password berhasil diupdate!']);
    }

    public function order()
    {
        return view('fo.order-VFO', [
            "title" => "Order"
        ]);
    }

    public function editorder()
    {
        return view('fo.edit-order-VFO', [
            "title" => "Edit Order"
        ]);
    }

    public function strukturkredit()
    {
        return view('fo.struktur-kredit-VFO', [
            "title" => "Struktur Kredit"
        ]);
    }

    public function penerimaanuang()
    {
        return view('fo.penerimaan-uang-VFO', [
            "title" => "Penerimaan Uang"
        ]);
    }

    public function cetakbukuanggota()
    {
        return view('fo.cetak-buku-anggota-VFO', [
            "title" => "Cetak Buku Anggota"
        ]);
    }

    public function profilfo()
    {
        return view('fo.profil-VFO', [
            "title" => "Profile"
        ]);
    }

    public function printbukuag()
    {

        return view('fo.print-buku-anggota', [
            "title" => "Cetak"
        ]);
    }

    public function kartuanggota()
    {
        return view('anggota.kartu-anggota-VAg', [
            "title" => "Kartu Anggota"
        ]);
    }

    public function pinjaman()
    {
        return view('anggota.pinjaman-VAg', [
            "title" => "Pinjaman"
        ]);
    }

    public function simpanan()
    {
        return view('anggota.simpanan-VAg', [
            "title" => "Simpanan"
        ]);
    }

    public function profilag()
    {
        return view('anggota.profil-VAg', [
            "title" => "Ubah Password"
        ]);
    }
}
