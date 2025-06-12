<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    public function index(Request $request)
    {
        $query = Karyawan::query();

        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where('namalengkap', 'like', "%$search%")
                  ->orWhere('divisi', 'like', "%$search%")
                  ->orWhere('departemen', 'like', "%$search%");
        }

        $karyawan = $query->get();
        return view('karyawan.index', compact('karyawan'));
    }

    public function create()
    {
        return view('karyawan.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'kodepegawai' => 'required|string',
            'namalengkap' => 'required|string|max:50',
            'divisi' => 'required|string',
            'departemen' => 'required|string|max:20',
        ]);

        Karyawan::create($validated);
        return redirect()->route('karyawan.index');
    }

    public function edit($id)
    {
        $karyawan = Karyawan::where('kodepegawai', $id)->firstOrFail();
        return view('karyawan.edit', compact('karyawan'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'namalengkap' => 'required|string|max:50',
            'divisi' => 'required|string',
            'departemen' => 'required|string|max:20',
        ]);

        Karyawan::where('kodepegawai', $id)->update($validated);
        return redirect()->route('karyawan.index')->with('success', 'Data berhasil diupdate');
    }

    public function destroy($id)
    {
        Karyawan::where('kodepegawai', $id)->delete();
        return redirect()->route('karyawan.index');
    }
}
