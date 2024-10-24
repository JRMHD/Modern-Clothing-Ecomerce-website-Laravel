<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AddressController extends Controller
{
    // List all addresses for the authenticated user
    public function index()
    {
        $addresses = Auth::user()->addresses;
        return view('addresses.index', compact('addresses'));
    }


    // Show the form for creating a new address
    public function create()
    {
        return view('addresses.create'); // This view will be created next
    }

    // Show the form for editing an address
    public function edit($id)
    {
        $address = Address::where('user_id', Auth::id())->findOrFail($id);
        return view('addresses.edit', compact('address'));
    }

    // Update the address
    public function update(Request $request, $id)
    {
        $request->validate([
            'address_line_1' => 'required|string|max:255',
            'city' => 'required|string|max:100',
            'state' => 'required|string|max:100',
            'zip_code' => 'required|string|max:20',
            'country' => 'required|string|max:100',
        ]);

        $address = Address::where('user_id', Auth::id())->findOrFail($id);
        $address->update($request->all());

        return redirect()->route('addresses.index')->with('success', 'Address updated successfully.');
    }

    // Delete the address
    public function destroy($id)
    {
        $address = Address::where('user_id', Auth::id())->findOrFail($id);
        $address->delete();

        return redirect()->route('addresses.index')->with('success', 'Address deleted successfully.');
    }

    // Store a newly created address in storage
    public function store(Request $request)
    {
        $request->validate([
            'address_line_1' => 'required|string|max:255',
            'city' => 'required|string|max:100',
            'state' => 'required|string|max:100',
            'zip_code' => 'required|string|max:20',
            'country' => 'required|string|max:100',
        ]);

        // Create a new address associated with the authenticated user
        $address = new Address($request->all());
        $address->user_id = Auth::id(); // Associate the address with the authenticated user
        $address->save();

        return redirect()->route('addresses.index')->with('success', 'Address added successfully.');
    }
}
