<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.fo.employee.employees', [
            'title' => "Data Karyawan",
            'employees' => Employee::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.fo.employee.create-employee', [
            'title' => 'Tambah Data Karyawan',

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
        // dd($request);
        $validatedData = $request->validate([
            'nama' => 'required',
            'image' => 'nullable|image',
            'no_identitas' => 'required',
            'tmpt_lhr' => 'required',
            'tgl_lhr' => 'required',
            'no_tel' => 'required|min:10|max:12',
            'alamat' => 'required',
            'rt' => 'required',
            'rw' => 'required',
            'desa_kel' => 'required',
            'kec' => 'required',
            'kab_kota' => 'required',
            'provinsi' => 'required',
            'kode_pos' => 'nullable',
            'no_employee' => 'nullable'
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('profile-image');
        }

        $validatedData['no_employee'] = "CMO" . date('ymd') . Carbon::parse($request->tgl_lhr)->format('ymd');

        Employee::create($validatedData);


        return redirect('/dashboard/employee')->with('success', 'Data Berhasil Ditambah');

        // $validatedData['no_cmo'] = "CMO" . date('dmy') . ;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        return view('dashboard.fo.employee.show-employee', [
            'title' => 'Detail Karyawan',
            'employee' => $employee
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        return view('dashboard.fo.employee.edit-employee', [
            'title' => 'Edit Karyawan',
            'employee' => $employee
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    {
        $rules = [
            'nama' => 'required',
            'image' => 'nullable|image',
            'no_identitas' => 'required',
            'tmpt_lhr' => 'required',
            'tgl_lhr' => 'required',
            'no_tel' => 'required|min:10|max:12',
            'alamat' => 'required',
            'rt' => 'required',
            'rw' => 'required',
            'desa_kel' => 'required',
            'kec' => 'required',
            'kab_kota' => 'required',
            'provinsi' => 'required',
            'kode_pos' => 'nullable',
            'no_employee' => 'nullable'
        ];

        $validatedData = $request->validate($rules);

        if ($request->file('image')) {
            if ($request->image) {
                Storage::delete($request->image);
            }
            $validatedData['image'] = $request->file('image')->store('profile-image');
        }

        if ($request->tgl_lhr) {
            $validatedData['no_employee'] = "CMO" . $employee->created_at->format('ymd') . Carbon::parse($request->tgl_lhr)->format('ymd');
        }

        Employee::where('id', $employee->id)
            ->update($validatedData);

        return redirect('/dashboard/employee')->with('success', 'Data Berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        Employee::destroy($employee->id);

        return redirect('/dashboard/employee')->with('success', 'Data Berhasil dihapus');
    }
}
