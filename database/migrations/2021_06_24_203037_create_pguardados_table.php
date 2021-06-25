<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePguardadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pguardados', function (Blueprint $table) {
            $table->id("id_g");
            $table->string("img_g",60)->nullable();
            $table->string("fecha",100);
            $table->string("hora",100);
            $table->string("titulo_g",50);
            $table->string("descripcion_g",500);
        });
        Schema::table('pguardados', function (Blueprint $table) {
            $table->unsignedBigInteger("f_id_g");
            $table->foreign("f_id_g")->references("id_publi")->on("publicacions");
        });

    }

    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pguardados');
    }
}
