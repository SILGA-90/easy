<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChauffeursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Chauffeurs', function (Blueprint $table) {
            $table->bigIncrements('chauf_id');
            $table->string('firstname');
            $table->string('lastname');
            $table->integer('old');
            $table->string('gender');
            $table->string('email')->unique();
            $table->string('phone');
            $table->string('nationality');
            $table->string('no_CNIB');
            $table->tinyInteger('statut')->default(1);
            $table->string('image')->nullable();
            $table->unsignedBigInteger('comp_id');
            $table->foreign('comp_id')->references('comp_id')->on('compagnies');
            $table->softDeletes();
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
        Schema::dropIfExists('Chauffeurs');
    }
}
