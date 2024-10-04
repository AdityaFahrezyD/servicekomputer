<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teknisi;

class TeknisiController extends Controller
{
    public function index()
    {
        $teknisis = Teknisi::all();
        return view('admin.teknisi', compact('teknisis'));
    }

    public function edit($id)
    {
        // Find the technician by ID
        $teknisi = Teknisi::findOrFail($id);
        return view('admin.teknisi_edit', compact('teknisi'));
    }

    public function update(Request $request, $id)
    {
        // Validate the request data
        $request->validate([
            'nama' => 'required|string|max:100',
            'alamat' => 'required|string|max:100',
            'hp' => 'required|string|max:15',
            'username' => 'required|string|max:100',
            'status' => 'required|in:dalam pengerjaan,kosong',
            'job_desk' => 'required|string|max:30',
        ]);

        // Find the technician by ID
        $teknisi = Teknisi::findOrFail($id);

        // Update the technician's information
        $teknisi->update($request->all());

        // Redirect back to the list of technicians with a success message
        return redirect()->route('teknisi.index')->with('success', 'Teknisi berhasil diperbarui.');
    }

    public function destroy($id)
    {
        // Find the technician by ID
        $teknisi = Teknisi::findOrFail($id);

        // Delete the technician from the database
        $teknisi->delete();

        // Redirect back to the list of technicians with a success message
        return redirect()->route('teknisi.index')->with('success', 'Teknisi berhasil dihapus.');
    }
}
