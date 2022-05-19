<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->boolean('precio');
            $table->integer('stock');

            $table->unsignedBigInteger('id_categoria')->unsigned();
            $table->foreign('id_categoria')->references('id')->on('categorias');

            $table->unsignedBigInteger('id_estado')->unsigned();
            $table->foreign('id_estado')->references('id')->on('estados');
        
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
        Schema::dropIfExists('productos');
    }
};
