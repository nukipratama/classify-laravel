<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gear;
use App\Enums\GearType;

class GearController extends Controller
{
    public function index()
    {
        $gears = Gear::orderBy('id')->get();

        $gearsByType = $gears->groupBy('type');

        return view('gear.index', [
            'gearsByType' => $gearsByType,
            'gearTypes' => GearType::cases(),
        ]);
    }
}
