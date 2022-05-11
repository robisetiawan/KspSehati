<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.register', [
            "title" => "register"
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email:dns|unique:users',
            'image' => 'image|file|max:10000',
            'password' => 'required|min:5|max:100'
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('profile-image');
        }
        //jika code diatas lolos jalankan yg dibawah
        // dd('registrasi berhasil');

        // $validatedData['password'] = bcrypt($validatedData['password']); //ambil colom password ubah menjadi bcrypt or 
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData); //push ke database model User

        // $request->session()->flash('status', 'Registration Successfull !!!'); //flash data jika berhasil dilakukan perintah sebelumy

        return redirect('/register')->with('status', 'Registration Successfull !!!'); //jika selesai akan diarahkan ke "/register" dengan membawa flash data
    }
}
