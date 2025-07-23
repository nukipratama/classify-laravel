<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OpenYardController extends Controller
{
    public function index()
    {
        return view('open-yard.index');
    }
}
