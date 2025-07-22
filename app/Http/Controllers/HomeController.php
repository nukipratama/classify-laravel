<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {


        return view('home');
    }

    public function store(Request $request)
    {
        // Validate the input
        $validated = $request->validate([
            'berat' => 'required|string|max:255',
            'bentuk' => 'required|string|max:255',
            'crane' => 'required|string|max:255',
        ]);

        // Flash data to session and redirect back (reload page)
        return redirect()->route('home')->with([
            'data' => $validated,
            'withData' => true,
        ]);
    }
}
