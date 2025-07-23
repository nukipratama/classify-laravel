<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Enums\Shape;
use App\Enums\Crane;

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
        'min_weight' => 'decimal:2',
        'max_weight' => 'decimal:2',
        'shape' => Shape::class,
        'crane' => Crane::class,
    ];
}
