<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
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
        'swl' => 'float',
        'length' => 'float',
    ];

    /**
     * Get all inventory records for this variant
     */
    public function inventory(): HasMany
    {
        return $this->hasMany(Inventory::class, 'inventory_variant_id', 'id');
    }

    /**
     * Scope to include total quantity in queries
     */
    public function scopeWithTotalQuantity($query)
    {
        return $query->withSum('inventory as total_quantity', 'quantity');
    }

    public function getLabel(): string
    {
        $swl = (string) $this->swl;
        $label = "{$this->name} {$swl} T";

        if ($this->type === InventoryVariantType::WIRE_SLING) {
            $length = (string) $this->length;
            $label .= " {$length} m";
        }

        return $label;
    }
}
