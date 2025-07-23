<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public const INVENTORY_TYPES = [
        'wire_sling',
        'shackle',
        'hook',
        'masterlink',
        'lashing',
        'chain_sling',
        'webbing_sling',
        'webbing_round_sling',
        'accesories',
        'pelat_besi',
        'chain_block',
        'ccu',
    ];

    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('inventory_variant', function (Blueprint $table) {
            $table->id();
            $table->enum('type', self::INVENTORY_TYPES);
            $table->string('name');
            $table->decimal('swl', 8, 2)->default(0);
            $table->decimal('length', 8, 2)->default(0);
            $table->timestamps();

            $table->unique(['type', 'name', 'swl', 'length'], 'type_name_swl_length_unique');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventory_variant');
    }
};
