<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItinerairesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Itineraires', function (Blueprint $table) {
            $table->bigIncrements('it_id');
            $table->tinyInteger('it_statut')->default(1);
            $table->unsignedBigInteger('departcity_id');
            $table->foreign('departcity_id')->references('departcity_id')->on('Departcity');
            $table->unsignedBigInteger('arrivalcity_id');
            $table->foreign('arrivalcity_id')->references('arrivalcity_id')->on('Arrivalcity');
            $table->unsignedBigInteger('day_id');
            $table->foreign('day_id')->references('day_id')->on('Days');
            $table->unsignedBigInteger('time_id');
            $table->foreign('time_id')->references('time_id')->on('Times');
            $table->unsignedBigInteger('bus_id');
            $table->foreign('bus_id')->references('bus_id')->on('Bus');
            $table->unsignedBigInteger('price_id');
            $table->foreign('price_id')->references('price_id')->on('Prices');
            $table->unsignedBigInteger('comp_id');
            $table->foreign('comp_id')->references('comp_id')->on('Compagnies');
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
        Schema::dropIfExists('Itineraires');
    }
}
