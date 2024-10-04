<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::all();
        return view('admin.customer', compact('customers'));
    }

    public function edit($id)
    {
        // Find the customer by ID
        $customer = Customer::findOrFail($id);
        return view('admin.customer_edit', compact('customer'));
    }

    public function update(Request $request, $id)
    {
        // Validate the request data
        $request->validate([
            'email' => 'required|string|max:200',
            'nama' => 'required|string|max:100',
            'alamat' => 'required|string|max:100',
            'hp' => 'required|string|max:15',
        ]);

        // Find the technician by ID
        $customer = Customer::findOrFail($id);

        // Update the technician's information
        $customer->update($request->all());

        // Redirect back to the list of technicians with a success message
        return redirect()->route('customer.index')->with('success', 'Customer berhasil diperbarui.');
    }

    public function destroy($id)
    {
        // Find the technician by ID
        $customer = Customer::findOrFail($id);

        // Delete the technician from the database
        $customer->delete();

        // Redirect back to the list of technicians with a success message
        return redirect()->route('customer.index')->with('success', 'Customer berhasil dihapus.');
    }
}
