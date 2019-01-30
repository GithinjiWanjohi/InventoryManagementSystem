<?php

use App\User;
use Faker\Generator as Faker;

$factory->define(App\Model\TransactionIn::class, function (Faker $faker) {
    return [
        'dateTime_in' => $faker->dateTime,
        'staff_no' => function() {
            return User::all()->random();
        },

        'material_id' => $faker->numberBetween(0,10),
        'place_id' => $faker->numberBetween(0,10),
        'description' => $faker->sentence,
        'quantity' =>$faker->numberBetween(0,100),
    ];
});
