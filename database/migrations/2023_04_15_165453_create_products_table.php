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
            $table->string('name')->unique();
            $table->text('description')->nullable();
            $table->text('image')->nullable();
            $table->tinyInteger('status');
            $table->tinyInteger('stock_status');
            $table->tinyInteger('visibility');
            $table->date('published_date');
            $table->tinyInteger('condition');
            $table->string('weight')->nullable();
            $table->string('length')->nullable();
            $table->string('height')->nullable();
            $table->string('width')->nullable();
            $table->string('regular_price');
            $table->string('sale_price')->nullable();
            $table->date('start_sale_price_date')->nullable();
            $table->date('end_sale_price_date')->nullable();
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
