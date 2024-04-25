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
        Schema::create('product_variations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('color_id')->constrained('variation_colors','id')->cascadeOnDelete();
            $table->foreignId('size_is')->constrained('variation_sizes','id')->cascadeOnDelete();
            $table->foreignId('weight_id')->constrained('variation_weights','id')->cascadeOnDelete();
            $table->string('name');
            $table->boolean('status')->default(false);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_variations');
    }
};
