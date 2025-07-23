<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Enums\GearType;

class Gear extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'gear';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'type',
        'name',
        'swl',
        'qty',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'type' => GearType::class,
        'swl' => 'decimal:2',
        'qty' => 'integer',
    ];



    /**
     * Get formatted SWL value.
     *
     * @return string
     */
    public function getFormattedSwlAttribute()
    {
        return $this->swl == 0 ? 'N/A' : number_format($this->swl, 2);
    }

    /**
     * Get the type label.
     *
     * @return string
     */
    public function getTypeLabelAttribute()
    {
        return str_replace('_', ' ', ucwords($this->type->value, '_'));
    }
}
