<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public const GEAR_TYPES = [
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
        Schema::create('gear', function (Blueprint $table) {
            $table->id();
            $table->enum('type', self::GEAR_TYPES);
            $table->string('name');
            $table->decimal('swl', 8, 2);
            $table->unsignedInteger('qty');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gear');
    }
};
