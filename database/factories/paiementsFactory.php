<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\paiements;
use Faker\Generator as Faker;

$factory->define(paiements::class, function (Faker $faker) {

    return [
        'somme' => $faker->randomDigitNotNull,
        'compte_debit' => $faker->word,
        'compte_credit' => $faker->word,
        'cust_id' => $faker->word,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
