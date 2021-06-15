<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\tickets;
use Faker\Generator as Faker;

$factory->define(tickets::class, function (Faker $faker) {

    return [
        'tick_type' => $faker->word,
        'tick_statut' => $faker->word,
        'place_choisie' => $faker->word,
        'bus_id' => $faker->word,
        'it_id' => $faker->word,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
