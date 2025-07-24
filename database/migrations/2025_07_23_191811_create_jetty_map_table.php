<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public const SHAPES = [
        'square',
        'square_cylinder',
    ];

    public const CRANES = [
        '120-Ton',
        '280-Ton',
    ];

    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('jetty_map', function (Blueprint $table) {
            $table->id();
            $table->float('min_weight', 2);
            $table->float('max_weight', 2);
            $table->enum('shape', self::SHAPES);
            $table->enum('crane', self::CRANES);
            $table->foreignId('inventory_variant_id')->constrained('inventory_variant');
            $table->unsignedInteger('required_quantity');
            $table->text('note')->nullable();
            $table->timestamps();

            $table->unique(
                [
                    'min_weight',
                    'max_weight',
                    'shape',
                    'crane',
                    'inventory_variant_id',
                ],
                'min_weight_max_weight_shape_crane_inventory_variant_id_unique'
            );
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jetty_map');
    }
};
