<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\bus;
use Faker\Generator as Faker;

$factory->define(bus::class, function (Faker $faker) {

    return [
        'bus_marque' => $faker->word,
        'bus_number' => $faker->word,
        'bus_type' => $faker->word,
        'total_place' => $faker->word,
        'place_dispo' => $faker->word,
        'image' => $faker->word,
        'bus_statut' => $faker->word,
        'chauf_id' => $faker->word,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
