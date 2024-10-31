<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $hotels = Hotel::all();
        return view('welcome', compact('hotels'));
    }
}
