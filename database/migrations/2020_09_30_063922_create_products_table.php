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
            $table->string('brand')->default('Fresh');
//            $table->unsignedBigInteger('vendor_id');
            $table->longText('description');
            $table->integer('quantity');
            $table->integer('rate');
            $table->integer('prev_price')->nullable();
            $table->string('sku')->nullable();
            $table->string('image')->nullable();
            $table->string('tags')->default('Product');
            $table->integer('featured')->default(0);
            $table->integer('new_arrival')->default(0);
            $table->integer('top_sales')->default(0);
            $table->unsignedBigInteger('dept_id')->nullable();
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
