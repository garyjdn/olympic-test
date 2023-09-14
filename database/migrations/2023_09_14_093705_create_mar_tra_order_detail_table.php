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
        Schema::create('mar_tra_order_detail', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('order_id');
            $table->string('item_id');
            $table->integer('qty');
            $table->timestamps();

            $table->foreign('order_id')->references('id')->on('mar_tra_order');
            $table->foreign('item_id')->references('id')->on('mar_mas_item');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mar_tra_order_detail');
    }
};
