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
            $table->string('license_type');
            $table->timestamps();
            $table->string('license');
            $table->string('style');
            $table->string('design_name');
            $table->string('style_description');
            $table->string('team');
            $table->string('sku')->unique()->nullable(false);
            $table->string('short_upc')->unique()->nullable(false);
            $table->integer('upc')->unique()->nullable(false);
            $table->string('setup_name');
            $table->boolean('is_depleting')->default(false);
            $table->decimal('price', 10, 2);
            $table->decimal('freight', 10, 2);
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
