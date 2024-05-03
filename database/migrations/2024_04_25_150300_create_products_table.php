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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->integer('qty')->nullable()->default(0);
            $table->decimal('price', 10, 2)->nullable()->default(0);
            $table->longText('description')->nullable();
            $table->longText('information')->nullable();
            $table->string('tags')->nullable();
            $table->foreignId('image_id')->constrained('images','id')->cascadeOnDelete()->nullable();
            $table->foreignId('brand_id')->constrained('brands','id')->cascadeOnDelete()->nullable();
            $table->foreignId('category_id')->constrained('categories','id')->cascadeOnDelete()->nullable();
            $table->boolean('status')->default(true);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
