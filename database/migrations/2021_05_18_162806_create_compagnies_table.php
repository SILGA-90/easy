<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompagniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Compagnies', function (Blueprint $table) {
            $table->bigIncrements('comp_id');
            $table->string('comp_name');
            $table->string('comp_code');
            $table->string('image')->nullable();
            $table->tinyInteger('comp_statut')->default(1);
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
        Schema::dropIfExists('Compagnies');
    }
}
