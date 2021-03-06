<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\times;
use Faker\Generator as Faker;

$factory->define(times::class, function (Faker $faker) {

    return [
        'departtime' => $faker->word,
        'arrivaltime_id' => $faker->word,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
