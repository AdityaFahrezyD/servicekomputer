<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\MsService;
use Illuminate\Http\Request;

class MsServiceController extends Controller
{
    

    public function index()
    {
        $services = MsService::all();
        return view('ms_services.index', compact('services'));
    }

    public function create()
    {
        return view('ms_services.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_service' => 'required|max:100',
            'harga' => 'required|integer',
        ]);

        MsService::create($request->all());

        return redirect()->route('services.index')->with('success', 'Service berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $service = MsService::findOrFail($id);
        return view('ms_services.edit', compact('service'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_service' => 'required|max:100',
            'harga' => 'required|integer',
        ]);

        $service = MsService::findOrFail($id);
        $service->update($request->all());

        return redirect()->route('services.index')->with('success', 'Service berhasil diupdate.');
    }

    public function destroy($id)
    {
        $service = MsService::findOrFail($id);
        $service->delete();

        return redirect()->route('services.index')->with('success', 'Service berhasil dihapus.');
    }
}
