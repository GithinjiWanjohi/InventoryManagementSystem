<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Place::class, function (Faker $faker) {
    return [
        'place_name' => $faker->streetName,
        'DESCRIPTION' => $faker->sentence,
    ];
});
