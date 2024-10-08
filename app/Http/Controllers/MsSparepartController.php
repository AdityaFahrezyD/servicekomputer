<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\MsSparepart;
use Illuminate\Http\Request;

class MsSparepartController extends Controller
{
    

    public function index()
    {
        $spareparts = MsSparepart::all();
        return view('ms_sparepart.index', compact('spareparts'));
    }

    public function create()
    {
        return view('ms_sparepart.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_sparepart' => 'required|max:100',
            'harga' => 'required|integer',
        ]);

        MsSparepart::create($request->all());

        return redirect()->route('spareparts.index')->with('success', 'Sparepart berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $sparepart = MsSparepart::findOrFail($id);
        return view('ms_sparepart.edit', compact('sparepart'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_sparepart' => 'required|max:100',
            'harga' => 'required|integer',
        ]);

        $sparepart = MsSparepart::findOrFail($id);
        $sparepart->update($request->all());

        return redirect()->route('spareparts.index')->with('success', 'Sparepart berhasil diupdate.');
    }

    public function destroy($id)
    {
        $sparepart = MsSparepart::findOrFail($id);
        $sparepart->delete();

        return redirect()->route('spareparts.index')->with('success', 'Sparepart berhasil dihapus.');
    }
}
