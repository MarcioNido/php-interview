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
        Schema::table('corretores', function (Blueprint $table){
            $table->integer('equipe_id')->nullable()->after('id');
        });

        $query = ' UPDATE corretores
                    SET equipe_id = ( SELECT id FROM equipes WHERE equipes.imobiliaria_id = corretores.imobiliaria_id )';

        DB::statement($query);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('corretores', function (Blueprint $table){
            $table->dropColumn('equipe_id');
        });
    }
};
