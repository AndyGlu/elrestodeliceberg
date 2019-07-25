<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('id');
            $table->string('productName', 100)->nullable(false);
            $table->string('productDescription', 1000)->nullable();
            $table->integer('stock')->nullable(false);
            $table->decimal('price', 10, 2)->nullable();
                $table->string('img1')->nullable(false);
                  $table->string('img2')->nullable();
                    $table->string('img3')->nullable();
            $table->timestamps();
            $table->softDeletes();
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
