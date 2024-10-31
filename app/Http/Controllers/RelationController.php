<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Models\Kamar;
use App\Models\Tamu;
use App\Models\Reservasi;
use App\Models\Profile;
use Illuminate\Http\Request;

class RelationController extends Controller
{
    public function index()
    {
        return view('relations.index');
    }
    public function hotels()
    {
        $hotels = Hotel::all();
        return view('relations.hotels.index', compact('hotels'));
    }

    public function kamars()
    {
        $kamars = Kamar::all();
        return view('kamars.index', compact('kamars'));
    }

    public function tamus()
    {
        // Load tamus with their associated profile and kamars for display
        $tamus = Tamu::with(['profile', 'kamars'])->get(); 
        return view('tamus.index', compact('tamus')); // General view for guests
    }

    public function reservasis()
    {
        $reservasis = Reservasi::all();
        return view('reservasis.index', compact('reservasis')); // General view for reservations
    }

    public function profiles()
    {
        $profiles = Profile::all();
        return view('profiles.index', compact('profiles'));
    }
}

