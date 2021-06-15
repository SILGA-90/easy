<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Reservations', function (Blueprint $table) {
            $table->bigIncrements('reserv_id');
            $table->string('lastname');
            $table->string('firstname');
            $table->string('email')->unique();
            $table->string('phone');
            $table->tinyInteger('reserv_statut')->default(1);
            $table->date('date');
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
        Schema::dropIfExists('Reservations');
    }
}
