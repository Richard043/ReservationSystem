<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\Tamu;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $profiles = Profile::all();
        return view('profiles.index', compact('profiles'));
    }

    // Display a list of all profiles (admin view)
    public function profiles()
    {
        $profiles = Profile::all(); // Fetch all profiles
        return view('admin.profiles.index', compact('profiles')); // Return the admin index view
    }

    // Show the form for creating a new profile
    public function create()
    {
        $tamus = Tamu::all();
        return view('admin.profiles.create', compact('tamus')); // Return the create form view
    }

    // Store a newly created profile in the database
    public function store(Request $request)
    {
        $request->validate([
            'tamu_id' => 'required|exists:tamus,id', // Assuming profile belongs to a guest
            'bio' => 'required|string|max:255'
        ]);

        Profile::create($request->all());

        return redirect()->route('admin.profiles.index')->with('success', 'Profile created successfully.');
    }

    // Display a specific profile
    public function show(Profile $profile)
    {
        return view('admin.profiles.show', compact('profile')); // Show a single profile's details
    }

    // Show the form for editing a specific profile
    public function edit(Profile $profile)
    {
        $tamus = Tamu::all();
        return view('admin.profiles.edit', compact('profile', 'tamus')); // Return the edit form view
    }

    // Update the specified profile in the database
    public function update(Request $request, Profile $profile)
    {
        $request->validate([
            'tamu_id' => 'required|exists:tamus,id',
            'bio' => 'required|string|max:255'
        ]);

        $profile->update($request->all());

        return redirect()->route('admin.profiles.index')->with('success', 'Profile updated successfully.');
    }

    // Delete the specified profile from the database
    public function destroy(Profile $profile)
    {
        $profile->delete();

        return redirect()->route('admin.profiles.index')->with('success', 'Profile deleted successfully.');
    }
}
