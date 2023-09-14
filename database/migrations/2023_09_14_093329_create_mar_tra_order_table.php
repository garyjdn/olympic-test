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
        Schema::create('mar_tra_order', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('customer_id');
            $table->string('marketplace_id');
            $table->string('expedition_id');
            $table->timestamps();

            $table->foreign('customer_id')->references('id')->on('mar_mas_customer');
            $table->foreign('marketplace_id')->references('id')->on('mar_mas_marketplace');
            $table->foreign('expedition_id')->references('id')->on('mar_mas_expedition');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mar_tra_order');
    }
};
