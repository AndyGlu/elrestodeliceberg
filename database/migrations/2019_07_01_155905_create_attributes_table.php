<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttributesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attributes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('vitaminaA', 20)->nullable();
            $table->string('vitaminaB', 20)->nullable();
            $table->string('vitaminaC', 20)->nullable();
            $table->string('vitaminaD', 20)->nullable();
            $table->string('vitaminaE', 20)->nullable();
            $table->string('vitaminaK', 20)->nullable();
            $table->string('vitaminaB12', 20)->nullable();
            $table->string('acidoFolico', 20)->nullable();
            $table->string('hidratosSimples', 20)->nullable();
            $table->string('hidratosComplejos', 20)->nullable();
            $table->string('proteinaAnimal', 20)->nullable();
            $table->string('proteinaVegetal', 20)->nullable();
            $table->string('grasasMonoInsaturadas', 20)->nullable();
            $table->string('grasasPoliInsaturadas', 20)->nullable();
            $table->string('grasasSaturadas', 20)->nullable();
            $table->string('fibraSoluble', 20)->nullable();
            $table->string('fibraInsolubre', 20)->nullable();
            $table->string('antioxidantes', 20)->nullable();
            $table->string('cafeina', 20)->nullable();
            $table->string('probioticos', 20)->nullable();
            $table->string('prebioticos', 20)->nullable();
            $table->string('calcio', 20)->nullable();
            $table->string('selenio', 20)->nullable();
            $table->string('potasio', 20)->nullable();
            $table->string('zinc', 20)->nullable();
            $table->string('fosforo', 20)->nullable();
            $table->string('hierro', 20)->nullable();
            $table->string('magnesio', 20)->nullable();
            $table->string('sodio', 20)->nullable();
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
        Schema::dropIfExists('attributes');
    }
}
