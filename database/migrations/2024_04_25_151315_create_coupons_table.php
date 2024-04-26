<?php

use Illuminate\Support\Carbon;
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
        Schema::create('coupons', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('discount_rate')->default(1);
            $table->string('description');
            $table->dateTime('start_date')->default(Carbon::now());
            $table->dateTime('end_date')->default(Carbon::now()->addDays(30))->comment('end day to next month i.e a month');
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
        Schema::dropIfExists('coupons');
    }
};
