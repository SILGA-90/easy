<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\chauffeurs;
use Faker\Generator as Faker;

$factory->define(chauffeurs::class, function (Faker $faker) {

    return [
        'firstname' => $faker->word,
        'lastname' => $faker->word,
        'old' => $faker->randomDigitNotNull,
        'gender' => $faker->word,
        'email' => $faker->word,
        'phone' => $faker->word,
        'nationality' => $faker->word,
        'no_CNIB' => $faker->word,
        'statut' => $faker->word,
        'image' => $faker->word,
        'id' => $faker->word,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
