<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\prices;
use Faker\Generator as Faker;

$factory->define(prices::class, function (Faker $faker) {

    return [
        'price' => $faker->randomDigitNotNull,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
