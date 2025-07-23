<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventory;
use App\Models\InventoryVariant;
use App\Enums\InventoryVariantType;

class InventoryController extends Controller
{
    public function index()
    {
        // Get all inventories with their variants, grouped by type
        $inventories = Inventory::with('variant')
            ->get()
            ->groupBy('variant.type');

        // Map enum cases to their corresponding inventories
        $inventoriesByType = collect(InventoryVariantType::cases())
            ->keyBy('value')
            ->map(function ($enumCase, $typeValue) use ($inventories) {
                return $inventories->get($typeValue, collect());
            })
            ->filter(function ($typeInventories) {
                return $typeInventories->isNotEmpty();
            });

        return view('inventory.index', [
            'inventoriesByType' => $inventoriesByType,
            'inventoryTypes' => InventoryVariantType::cases(),
        ]);
    }
}
