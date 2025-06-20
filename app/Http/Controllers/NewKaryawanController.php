<?php
namespace App\Http\Controllers;
use App\Models\NewKaryawan;
use Illuminate\Http\Request;

class NewKaryawanController extends Controller
{
    public function index(Request $request)
    {
        $cari = $request->cari;
        $data = NewKaryawan::when($cari, function ($query, $cari) {
            return $query->where('nama', 'like', "%$cari%");
        })->get();

        return view('newkaryawan.index', compact('data', 'cari'));
    }

    public function create()
    {
        return view('newkaryawan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
    'NIP' => 'required',
    'nama' => 'required',
    'pangkat' => 'required',
    'gaji' => 'required',
]);

        NewKaryawan::create([
            'NIP' => $request->nip,
            'nama' => $request->nama,
            'pangkat' => $request->pangkat,
            'gaji' => $request->gaji,
        ]);

        return redirect()->route('newkaryawan.index')->with('success', 'Data berhasil ditambahkan');
    }

    public function destroy($nip)
    {
        NewKaryawan::where('NIP', $nip)->delete();
        return redirect()->route('newkaryawan.index')->with('success', 'Data berhasil dihapus');
    }
}
