<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableUsersAddFkPlano extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Adicionando a coluna da Fk
        Schema::table('users', function (Blueprint $table)
        {
            $table->unsignedBigInteger('plano_id')->nullable();
        });

        // Atribuindo a FK
        Schema::table('users', function (Blueprint $table)
        {
            $table->foreign('plano_id')->references('id')->on('planos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign('users_plano_id_foreign');
        });
        
        // removendo a coluna
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('plano_id');
        });
    }
}
