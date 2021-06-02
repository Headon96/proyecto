<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComentariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comentarios', function (Blueprint $table) {
            $table->id("id_com");
            $table->string("contenido",250);
        });
        Schema::table('comentarios', function (Blueprint $table) {
            $table->unsignedBigInteger("f_id_publi");
            $table->foreign("f_id_publi")->references("id_publi")->on("publicacions");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comentarios');
    }
}
