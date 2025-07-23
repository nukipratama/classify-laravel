<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Inventory extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'inventory';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'inventory_variant_id',
        'quantity',
    ];

    public function variant(): BelongsTo
    {
        return $this->belongsTo(InventoryVariant::class, 'inventory_variant_id', 'id');
    }
}
