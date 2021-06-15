<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\reservations;
use Faker\Generator as Faker;

$factory->define(reservations::class, function (Faker $faker) {

    return [
        'lastname' => $faker->word,
        'firstname' => $faker->word,
        'email' => $faker->word,
        'phone' => $faker->word,
        'reserv_statut' => $faker->word,
        'date' => $faker->word,
        'it_id' => $faker->word,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
