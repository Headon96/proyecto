<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePublicacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publicacions', function (Blueprint $table) {
            $table->id("id_publi");
            $table->string("img_publi",60)->nullable();
            $table->string("fecha",100);
            $table->string("hora",100);
            $table->string("titulo_p",50);
            $table->string("descripcion_p",500);
        });
        Schema::table('publicacions', function (Blueprint $table) {
            $table->unsignedBigInteger("f_id_user");
            $table->foreign("f_id_user")->references("id")->on("users");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('publicacions');
    }
}
