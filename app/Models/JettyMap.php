<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use App\Enums\Shape;
use App\Enums\Crane;
use Illuminate\Database\Eloquent\Relations\HasOne;

class JettyMap extends Model
{
    protected $table = 'jetty_map';

    protected $fillable = [
        'min_weight',
        'max_weight',
        'shape',
        'crane',
        'inventory_variant_id',
        'required_quantity',
        'note',
    ];

    protected $casts = [
        'min_weight' => 'float',
        'max_weight' => 'float',
        'shape' => Shape::class,
        'crane' => Crane::class,
    ];

    public function inventory_variant(): HasOne
    {
        return $this->hasOne(InventoryVariant::class, 'id', 'inventory_variant_id');
    }

    /**
     * Check if there's sufficient inventory quantity available
     */
    public function hasSufficientQuantity(): bool
    {
        $totalAvailable = $this->inventory_variant?->total_quantity ?? 0;
        $required = $this->required_quantity;

        return $totalAvailable >= $required;
    }

    public function doesntHaveSufficientQuantity(): bool
    {
        return ! $this->hasSufficientQuantity();
    }
}
