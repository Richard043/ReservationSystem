<?php

namespace App\Http\Controllers;

use App\Models\Reservasi;
use App\Models\Tamu;
use App\Models\Kamar;
use Illuminate\Http\Request;

class ReservasiController extends Controller
{
    // For general view
    public function index()
    {
        $reservasis = Reservasi::all();
        return view('reservasis.index', compact('reservasis')); // General view for reservations
    }

    public function createGeneralReservation(Request $request)
    {
        $kamar = Kamar::findOrFail($request->query('room_id'));
        return view('reservasis.create', compact('kamar'));
    }

    public function storeGeneralReservation(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'telepon' => 'required|string|max:15',
            'tanggal_checkin' => 'required|date',
            'tanggal_checkout' => 'required|date|after:tanggal_checkin',
            'kamar_id' => 'required|exists:kamars,id',
        ]);

        $tamu = Tamu::create($request->only('nama', 'email', 'telepon'));

        Reservasi::create([
            'tamu_id' => $tamu->id,
            'kamar_id' => $request->kamar_id,
            'tanggal_checkin' => $request->tanggal_checkin,
            'tanggal_checkout' => $request->tanggal_checkout,
        ]);

        return redirect()->route('reservasis.confirmation')->with('success', 'Reservation created successfully!');
    }




    // For admin view
    public function reservasis()
    {
        $reservasis = Reservasi::all();
        return view('admin.reservasis.index', compact('reservasis')); // Admin view for reservations
    }

    // Show the form for creating a new Reservasi (with associated tamus and kamars)
    public function create()
    {
        $tamus = Tamu::all();
        // $kamars = Kamar::all();
        $kamars = Kamar::with('hotel')->get()->sortBy(function($kamar) { return $kamar->hotel->nama_hotel; });
        return view('admin.reservasis.create', compact('tamus', 'kamars')); // Create view for reservation with room and guest options
    }

    // Store a new Reservasi
    public function store(Request $request)
    {
        $request->validate([
            'tamu_id' => 'required|exists:tamus,id', // Ensure the selected guest exists
            'kamar_id' => 'required|exists:kamars,id', // Ensure the selected room exists
            'tanggal_checkin' => 'required|date',
            'tanggal_checkout' => 'required|date|after_or_equal:tanggal_checkin'
        ], [
            'tamu_id.required' => 'Please select a guest.',
            'tamu_id.exists' => 'The selected guest does not exist.',
            'kamar_id.required' => 'Please select a room.',
            'kamar_id.exists' => 'The selected room does not exist.',
            'tanggal_checkin.required' => 'The check-in date is required.',
            'tanggal_checkout.required' => 'The check-out date is required.',
            'tanggal_checkout.after_or_equal' => 'The check-out date must be after or on the check-in date.'
        ]);

        Reservasi::create($request->all());

        return redirect()->route('admin.reservasis.index')->with('success', 'Reservasi created successfully.');
    }

    // Show a specific Reservasi
    public function show(Reservasi $reservasi)
    {
        return view('admin.reservasis.show', compact('reservasi')); // Show details of a specific reservation
    }

    // Show the form to edit a Reservasi
    public function edit(Reservasi $reservasi)
    {
        $tamus = Tamu::all();
        $kamars = Kamar::all();
        return view('admin.reservasis.edit', compact('reservasi', 'tamus', 'kamars')); // Edit view with associated guests and rooms
    }

    // Update Reservasi details
    public function update(Request $request, Reservasi $reservasi)
    {
        $request->validate([
            'tamu_id' => 'required|exists:tamus,id',
            'kamar_id' => 'required|exists:kamars,id',
            'tanggal_checkin' => 'required|date',
            'tanggal_checkout' => 'required|date|after_or_equal:check_in'
        ]);

        $reservasi->update($request->all());

        return redirect()->route('admin.reservasis.index')->with('success', 'Reservasi updated successfully.');
    }

    // Delete a Reservasi
    public function destroy(Reservasi $reservasi)
    {
        $reservasi->delete();

        return redirect()->route('admin.reservasis.index')->with('success', 'Reservasi deleted successfully.');
    }
}
