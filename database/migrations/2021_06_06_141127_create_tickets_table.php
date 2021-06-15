<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Tickets', function (Blueprint $table) {
            $table->bigIncrements('tick_id');
            $table->string('tick_type');
            $table->tinyInteger('tick_statut')->default(1);
            $table->string('place_choisie');
            $table->unsignedBigInteger('bus_id');
            $table->foreign('bus_id')->references('bus_id')->on('Bus');
            $table->unsignedBigInteger('it_id');
            $table->foreign('it_id')->references('it_id')->on('Itineraires');
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
        Schema::dropIfExists('Tickets');
    }
}
