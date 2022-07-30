<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('imobiliaria_id');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('imobiliaria_id')->references('id')->on('imobiliarias');
        });

        $query = 'INSERT INTO equipes (imobiliaria_id, created_at, updated_at, deleted_at ) SELECT DISTINCT (imobiliaria_id), created_at, updated_at, deleted_at from corretores';

        DB::insert($query);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('equipes');
    }
};
