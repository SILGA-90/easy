<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\arrivalcity;
use Faker\Generator as Faker;

$factory->define(arrivalcity::class, function (Faker $faker) {

    return [
        'acity_name' => $faker->word,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
