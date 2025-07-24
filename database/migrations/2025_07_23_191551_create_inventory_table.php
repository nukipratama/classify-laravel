<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('inventory', function (Blueprint $table) {
            $table->id();
            $table->foreignId('inventory_variant_id')->constrained('inventory_variant');
            $table->unsignedInteger('quantity');
            $table->timestamp('expired_at')->nullable();
            $table->timestamps();

            $table->index('inventory_variant_id', 'inventory_variant_id_index');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventory');
    }
};
