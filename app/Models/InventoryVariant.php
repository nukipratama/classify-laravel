<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Enums\InventoryVariantType;

class InventoryVariant extends Model
{
    protected $table = 'inventory_variant';

    protected $fillable = [
        'type',
        'name',
        'swl',
        'length',
    ];

    protected $casts = [
        'type' => InventoryVariantType::class,
        'swl' => 'decimal:2',
        'length' => 'decimal:2',
    ];
}
