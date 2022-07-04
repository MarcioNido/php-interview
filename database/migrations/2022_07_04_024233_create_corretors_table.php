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
        Schema::create('corretores', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('imobiliaria_id');
            $table->string('nome');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('imobiliaria_id')->references('id')->on('imobiliarias');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('corretores');
    }
};
