<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\karyawan;

class KaryawanController extends Controller
{
    public function index()
    {
        $karyawans = karyawan::paginate(5);
        return view('karyawans.index', ['data' => $karyawans]);
    }
    public function create()
    {
        return view('karyawans.create');
    }
    public function show($id)
    {
        $karyawan = karyawan::find($id);
        return $karyawan;
    }
    public function store(Request $request)
    {
        //validasi kolom wajib diisi
        $request->validate([
            'name'=> 'required',
            'email'=> 'required',
            'address'=> 'required',
        ]);

        karyawan::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'address'=>$request->address,
        ]);

        return redirect('/karyawan');
    }
    public function edit(Request $request, $id)
    {
        $karyawan = karyawan::find($id);
        return view('karyawans.edit', compact('karyawan'));

    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=>'required'
        ]);
        $karyawan = karyawan::find($id);
        $karyawan->update([
            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address,

        ]);
        return redirect('/karyawan');
    }
    public function destroy ($id)
    {
        $karyawan = karyawan::find($id);
        $karyawan->delete();
        return redirect('/karyawan');
    }

}