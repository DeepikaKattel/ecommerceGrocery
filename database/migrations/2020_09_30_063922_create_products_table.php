<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('brand');
            $table->unsignedBigInteger('vendor_id');
            $table->longText('description');
            $table->integer('quantity');
            $table->integer('rate');
            $table->integer('prev_price');
            $table->string('sku');
            $table->string('image');
            $table->string('tags');
            $table->integer('featured');
            $table->integer('new_arrival');
            $table->integer('top_sales');
            $table->unsignedBigInteger('dept_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
