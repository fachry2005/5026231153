<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RAM;

class RAMController extends Controller
{
    // Menampilkan daftar RAM dengan pencarian
    public function index(Request $request)
    {
        $query = RAM::query();

        if ($request->has('search')) {
            $search = $request->search;
            $query->where('merkRAM', 'like', '%' . $search . '%');
        }

        $ram = $query->orderBy('id', 'desc')->paginate(10);
        return view('ram.index', compact('ram'));
    }

    // Menampilkan form tambah
    public function create()
    {
        return view('ram.create');
    }

    // Menyimpan data RAM baru
    public function store(Request $request)
    {
        $request->validate([
            'merkRAM' => 'required|max:25',
            'hargaRAM' => 'required|integer',
            'tersedia' => 'required|boolean',
            'berat' => 'required|numeric',
        ]);

       RAM::create([
    'merkRAM' => $request->merkRAM,
    'hargaRAM' => $request->hargaRAM,
    'tersedia' => $request->tersedia,
    'berat' => $request->berat,
]);


        return redirect()->route('ram.index')->with('success', 'Data RAM berhasil ditambahkan!');
    }

    // Menampilkan form edit
    public function edit($id)
    {
        $ram = RAM::findOrFail($id);
        return view('ram.edit', compact('ram'));
    }

    // Menyimpan perubahan data RAM
    public function update(Request $request, $id)
    {
        $request->validate([
            'merkRAM' => 'required|max:25',
            'hargaRAM' => 'required|integer',
            'tersedia' => 'required|boolean',
            'berat' => 'required|numeric',
        ]);

        $ram = RAM::findOrFail($id);
        $ram->update($request->all());

        return redirect()->route('ram.index')->with('success', 'Data RAM berhasil diperbarui!');
    }

    // Menghapus data RAM
    public function destroy($id)
    {
        $ram = RAM::findOrFail($id);
        $ram->delete();

        return redirect()->route('ram.index')->with('success', 'Data RAM berhasil dihapus!');
    }
}
