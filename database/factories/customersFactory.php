<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\customers;
use Faker\Generator as Faker;

$factory->define(customers::class, function (Faker $faker) {

    return [
        'lastname' => $faker->word,
        'firstname' => $faker->word,
        'email' => $faker->word,
        'phone' => $faker->word,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
