<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->decimal('price', 8, 2);
            $table->decimal('discounted_price', 8, 2)->nullable(); // Optional discounted price
            $table->unsignedInteger('stock'); // Number of items in stock
            $table->string('category');
            $table->string('color');
            $table->string('sizes'); // Store sizes as comma-separated string (e.g., "S,M,L")
            $table->string('tags')->nullable(); // Store tags as a comma-separated string
            $table->string('sku')->unique(); // Unique SKU for the product
            $table->text('description')->nullable(); // Product description
            $table->string('image'); // Main image for the product
            $table->json('images')->nullable(); // Store additional images as a JSON array
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
}
