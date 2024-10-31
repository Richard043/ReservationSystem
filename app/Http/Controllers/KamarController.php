<?php

namespace App\Http\Controllers;

use App\Models\Kamar;
use App\Models\Hotel;
use Illuminate\Http\Request;

class KamarController extends Controller
{
    // For general view
    public function index()
    {
        $kamars = Kamar::all();
        return view('kamars.index', compact('kamars')); // General view for rooms
    }

    public function showRoom($id)
    {
        $kamar = Kamar::findOrFail($id);
        return view('kamars.show', compact('kamar'));
    }

    // For admin view
    public function kamars()
    {
        // $kamars = Kamar::all();
        $kamars = Kamar::with('hotel')->get()->sortBy(function($kamar) { return $kamar->hotel->nama_hotel; });
        return view('admin.kamars.index', compact('kamars')); // Admin view for rooms
    }

    // Show the form to create a new Kamar (with associated hotels)
    public function create()
    {
        $hotels = Hotel::all();
        return view('admin.kamars.create', compact('hotels')); // View for creating rooms with hotel selection
    }

    // Store a new Kamar
    public function store(Request $request)
    {
        $request->validate([
            'hotel_id' => 'required|exists:hotels,id',
            'nomor_kamar' => 'required|string|max:255|unique:kamars,nomor_kamar,NULL,id,hotel_id,' . $request->hotel_id,
            'tipe_kamar' => 'required|string|max:255',
            'harga' => 'required|numeric',
            'description' => 'nullable|string'
        ], [
            'hotel_id.required' => 'Please select a valid hotel.',
            'hotel_id.exists' => 'The selected hotel does not exist.',
            'nomor_kamar.unique' => 'This room number already exists for the selected hotel.',
            'nomor_kamar.required' => 'The room number is required.',
            'tipe_kamar.required' => 'The room type is required.',
            'harga.required' => 'The room price is required.',
            'harga.numeric' => 'The price must be a numeric value.'
        ]);

        Kamar::create($request->all());
        return redirect()->route('admin.kamars.index')->with('success', 'Kamar created successfully.');
    }


    // Show a specific Kamar
    public function show(Kamar $kamar)
    {
        return view('admin.kamars.show', compact('kamar')); // Display the details of a single Kamar
    }

    // Show the form to edit a Kamar
    public function edit(Kamar $kamar)
    {
        $hotels = Hotel::all();
        return view('admin.kamars.edit', compact('kamar', 'hotels')); // Edit view with associated hotel data
    }

    // Update Kamar details
    public function update(Request $request, Kamar $kamar)
    {
        $request->validate([
            'hotel_id' => 'required|exists:hotels,id',
            'nomor_kamar' => 'required|string|max:255|unique:kamars,nomor_kamar,' . $kamar->id . ',id,hotel_id,' . $request->hotel_id,
            'tipe_kamar' => 'required|string|max:255',
            'harga' => 'required|numeric',
            'description' => 'nullable|string'
        ]);

        $kamar->update($request->all());
        return redirect()->route('admin.kamars.index')->with('success', 'Kamar updated successfully.');
    }

    // Delete a Kamar
    public function destroy(Kamar $kamar)
    {
        $kamar->delete();
        return redirect()->route('admin.kamars.index')->with('success', 'Kamar deleted successfully.');
    }
}
