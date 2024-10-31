<?php

namespace App\Http\Controllers;

use App\Models\Tamu;
use Illuminate\Http\Request;

class TamuController extends Controller
{
    // For general view
    public function index()
    {
        // Load tamus with their associated profile and kamars for display
        $tamus = Tamu::with(['profile', 'kamars'])->get(); 
        return view('tamus.index', compact('tamus')); // General view for guests
    }

    // For admin view
    public function tamus()
    {
        // Load tamus with their associated profile and kamars for admin view
        $tamus = Tamu::with(['profile', 'kamars'])->get(); 
        return view('admin.tamus.index', compact('tamus')); // Admin view for guests
    }

    // Show the form to create a new Tamu
    public function create()
    {
        return view('admin.tamus.create'); // Create view for guests
    }

    // Store a new Tamu
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|unique:tamus,email',
            'telepon' => 'nullable|string|max:15',
            'address' => 'nullable|string|max:255'
        ], [
            'nama.required' => 'The guest name is required.',
            'email.required' => 'The guest email is required.',
            'email.email' => 'Please provide a valid email address.',
            'email.unique' => 'This email is already registered.'
        ]);

        Tamu::create($request->all());

        return redirect()->route('admin.tamus.index')->with('success', 'Tamu created successfully.');
    }

    // Show a specific Tamu
    public function show(Tamu $tamu)
    {
        return view('admin.tamus.show', compact('tamu')); // Show details of a single guest
    }

    // Show the form to edit a Tamu
    public function edit(Tamu $tamu)
    {
        return view('admin.tamus.edit', compact('tamu')); // Edit view for a guest
    }

    // Update Tamu details
    public function update(Request $request, Tamu $tamu)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|unique:tamus,email,' . $tamu->id,
            'telepon' => 'nullable|string|max:15',
            'address' => 'nullable|string|max:255'
        ], [
            'nama.required' => 'The guest name is required.',
            'email.required' => 'The guest email is required.',
            'email.email' => 'Please provide a valid email address.',
            'email.unique' => 'This email is already registered by another guest.'
        ]);

        $tamu->update($request->all());

        return redirect()->route('admin.tamus.index')->with('success', 'Tamu updated successfully.');
    }

    // Delete a Tamu
    public function destroy(Tamu $tamu)
    {
        $tamu->delete();

        return redirect()->route('admin.tamus.index')->with('success', 'Tamu deleted successfully.');
    }
}
