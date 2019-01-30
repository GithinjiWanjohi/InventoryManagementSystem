<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Materials::class, function (Faker $faker) {
    return [
        'name' =>  $faker->word,
        'categories_id'   =>  $faker->numberBetween(0,10),
    ];
});
