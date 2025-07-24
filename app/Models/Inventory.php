<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Inventory extends Model
{
    protected $table = 'inventory';

    protected $fillable = [
        'inventory_variant_id',
        'quantity',
        'expired_at',
    ];

    protected $casts = [
        'expired_at' => 'date',
    ];

    public function variant(): BelongsTo
    {
        return $this->belongsTo(InventoryVariant::class, 'inventory_variant_id', 'id');
    }
}
