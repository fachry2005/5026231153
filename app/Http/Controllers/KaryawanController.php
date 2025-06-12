<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    public function index()
    {
        $karyawan = Karyawan::all();
        return view('karyawan.index', compact('karyawan'));
    }

    public function create()
    {
        return view('karyawan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kodepegawai' => 'required|size:5|unique:karyawans,kodepegawai',
            'namalengkap' => 'required|max:50',
            'divisi' => 'required|size:5',
            'departemen' => 'required|max:10',
        ]);

        Karyawan::create($request->all());

        return redirect()->route('karyawan.index');
    }

    public function destroy($id)
    {
        Karyawan::where('kodepegawai', $id)->delete();
        return redirect()->route('karyawan.index');
    }
}
