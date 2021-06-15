<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Bus', function (Blueprint $table) {
            $table->bigIncrements('bus_id');
            $table->string('bus_marque');
            $table->string('bus_number');
            $table->string('bus_type');
            $table->string('total_place');
            // $table->string('place_dispo');
            $table->string('image')->nullable();
            $table->tinyInteger('bus_statut')->default(1);
            $table->unsignedBigInteger('chauf_id')->default(1);
            $table->foreign('chauf_id')->references('chauf_id')->on('Chauffeurs');
            $table->unsignedBigInteger('comp_id')->default(1);
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
        Schema::dropIfExists('Bus');
    }
}
