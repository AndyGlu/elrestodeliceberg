<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('product', 100)->nullable(false);
            $table->datetime('cartDate')->nullable(false);
            $table->integer('quantity', 11)->nullable();
            $table->decimal('price', 10, 2)->nullable();
            $table->string('cartStatus', 50)->nullable();
            $table->integer('purchaseOrderNumber', 10)->unique()->nullable(false);
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
        Schema::dropIfExists('carts');
    }
}
