<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\compagnies;
use Faker\Generator as Faker;

$factory->define(compagnies::class, function (Faker $faker) {

    return [
        'comp_name' => $faker->word,
        'comp_code' => $faker->word,
        'image' => $faker->word,
        'comp_statut' => $faker->word,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
