<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
//			$table->foreign('vendor_id')->references('id')->on('vendors')->onUpdate('RESTRICT')->onDelete('CASCADE');
            $table->foreign('dept_id')->references('id')->on('departments')->onUpdate('RESTRICT')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropForeign('products_vendor_id_foreign');
            $table->dropForeign('products_dept_id_foreign');
        });
    }
}
