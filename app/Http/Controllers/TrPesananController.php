<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teknisi;
use App\Models\Customer;
use App\Models\TrPesanan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log; // Import Log class

class TrPesananController extends Controller
{
    
    public function indexAdmin()
    {
        if (Auth::guard('admin')->check()) {
            $pesanans = TrPesanan::all();
            return view('pesanan.admin_index', compact('pesanans'));
        } else {
            return redirect()->route('login')->with('error', 'You must be logged in to access this page.');
        }
        
    }

    public function indexCustomer()
    {
        Log::info('Entering indexCustomer method'); // Initial log entry
    
        // Use the guard directly
        if (Auth::guard('customer')->check()) {
            $customer_id = Auth::guard('customer')->user()->id;
            Log::info('Authenticated Customer ID: ' . $customer_id); // Log customer ID
    
            $pesanans = TrPesanan::where('customer_id', $customer_id)->get();
            Log::info('Pesanan: ' . json_encode($pesanans->toArray())); // Log retrieved orders
    
            return view('pesanan.customer_index', compact('pesanans'));
        } else {
            Log::warning('Customer not authenticated'); // Log warning if not authenticated
            return redirect()->route('login')->with('error', 'You must be logged in to access this page.');
        }
    }
    


    public function createAdmin()
    {
        $teknisis = Teknisi::all();
        $customers = Customer::all();
        return view('pesanan.admin_create', compact('teknisis', 'customers'));
    }

    public function storeAdmin(Request $request)
    {
        Log::info('storeAdmin method called');
        Log::info($request->all());

        $request->validate([
            'tanggal_pesanan' => 'required|date',
            'customer_id' => 'required|exists:customers,id',
            'id_teknisi' => 'nullable|exists:teknisis,id',
            'estimasi_biaya' => 'nullable|integer',
            'estimasi_waktu' => 'nullable|integer',
        ]);

        TrPesanan::create([
            'customer_id' => $request->customer_id,
            'id_teknisi' => $request->id_teknisi,
            'tanggal_pesanan' => $request->tanggal_pesanan,
            'estimasi_biaya' => $request->estimasi_biaya,
            'estimasi_waktu' => $request->estimasi_waktu,
            'status_service' => 'menunggu',
        ]);

        return redirect()->route('pesanan.admin.index')->with('success', 'Pesanan berhasil dibuat.');
    }

    public function createCustomer()
    {
        $teknisis = Teknisi::all();
        return view('pesanan.customer_create', compact('teknisis'));
    }

    public function storeCustomer(Request $request)
    {
        $request->validate([
            'tanggal_pesanan' => 'required|date',
            'id_teknisi' => 'nullable|exists:teknisis,id',
        ]);

        $customer_id = Auth::guard('customer')->user()->id;

        TrPesanan::create([
            'customer_id' => $customer_id,
            'id_teknisi' => $request->id_teknisi,
            'tanggal_pesanan' => $request->tanggal_pesanan,
            'status_service' => 'booked',
        ]);

        return redirect()->route('pesanan.customer.index')->with('success', 'Pesanan berhasil dibuat.');
    }



    // Edit a specific order (only accessible to owner or admin)
    public function customerEdit($id)
    {
        $pesanan = TrPesanan::findOrFail($id);

        // Check if the authenticated user is a customer and the owner of the order
        if (Auth::guard('customer')->check() && $pesanan->customer_id == Auth::guard('customer')->user()->id) {
            $teknisis = Teknisi::all();
            return view('pesanan.customer_edit', compact('pesanan', 'teknisis'));
        }

        return redirect()->route('pesanan.customer.index')->with('error', 'Anda tidak memiliki izin untuk mengedit pesanan ini.');
    }



    // Update a specific order
    public function customerUpdate(Request $request, $id)
    {
        $request->validate([
            'tanggal_pesanan' => 'required|date',
            'id_teknisi' => 'nullable|exists:teknisis,id',
        ]);

        $pesanan = TrPesanan::findOrFail($id);

        // Check if the authenticated user is the owner of the order
        if (Auth::guard('customer')->check() && $pesanan->customer_id == Auth::guard('customer')->user()->id) {
            $pesanan->update($request->all());
            return redirect()->route('pesanan.customer.index')->with('success', 'Pesanan berhasil diperbarui.');
        }

        return redirect()->route('pesanan.customer.index')->with('error', 'Anda tidak memiliki izin untuk mengedit pesanan ini.');
    }

    public function adminEdit($id)
    {
        
        $pesanan = TrPesanan::findOrFail($id);
    
        // Check if the authenticated user is an admin
        if (Auth::guard('admin')->check()) {
            $teknisis = Teknisi::all();
            $customers = Customer::all();
            return view('pesanan.admin_edit', compact('teknisis', 'customers', 'pesanan'));
        }
    
        return redirect()->route('pesanan.admin.index')->with('error', 'Anda tidak memiliki izin untuk mengedit pesanan ini.');
    }
    
    // Update a specific order by admin
    public function adminUpdate(Request $request, $id)
    {
        $request->validate([
            'tanggal_pesanan' => 'required|date',
            'customer_id' => 'required|exists:customers,id',
            'id_teknisi' => 'nullable|exists:teknisis,id',
            'estimasi_biaya' => 'nullable|integer',
            'estimasi_waktu' => 'nullable|integer',
            'status_service' => 'required|in:menunggu,dalam proses,selesai',
        ]);
    
        $pesanan = TrPesanan::findOrFail($id);
    
        // Check if the authenticated user is an admin
        if (Auth::guard('admin')->check()) {
            $pesanan->update([
                'customer_id' => $request->customer_id,
                'id_teknisi' => $request->id_teknisi,
                'tanggal_pesanan' => $request->tanggal_pesanan,
                'estimasi_biaya' => $request->estimasi_biaya,
                'estimasi_waktu' => $request->estimasi_waktu,
                'status_service' => $request->status_service,
            ]);
            return redirect()->route('pesanan.admin.index')->with('success', 'Pesanan berhasil diperbarui.');
        }
    
        return redirect()->route('pesanan.admin.index')->with('error', 'Anda tidak memiliki izin untuk mengedit pesanan ini.');
    }
    
    // Delete a specific order (only accessible to owner or admin)
    public function destroyAdmin($id)
    {
        $pesanan = TrPesanan::findOrFail($id);

        // Check if the authenticated user is an admin
        if (Auth::guard('admin')->check()) {
            $pesanan->delete();
            return redirect()->route('pesanan.admin.index')->with('success', 'Pesanan berhasil dihapus.');
        }

        // If neither condition is met, return an error message
        return redirect()->route('admin.login')->with('error', 'Anda tidak memiliki izin untuk menghapus pesanan ini.');
    }

    public function destroyCustomer($id)
    {
        $pesanan = TrPesanan::findOrFail($id);

        // Check if the authenticated user is an admin
        if (Auth::guard('customer')->check()) {
            $pesanan->delete();
            return redirect()->route('pesanan.customer.index')->with('success', 'Pesanan berhasil dihapus.');
        }

        // If neither condition is met, return an error message
        return redirect()->route('customer.login')->with('error', 'Anda tidak memiliki izin untuk menghapus pesanan ini.');
    }


}
