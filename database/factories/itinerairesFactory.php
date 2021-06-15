<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\itineraires;
use Faker\Generator as Faker;

$factory->define(itineraires::class, function (Faker $faker) {

    return [
        'it_statut' => $faker->word,
        'departcity_id' => $faker->word,
        'arrivalcity_id' => $faker->word,
        'day_id' => $faker->word,
        'time_id' => $faker->word,
        'bus_id' => $faker->word,
        'price_id' => $faker->word,
        'comp_id' => $faker->word,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
