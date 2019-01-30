<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Materials::class, function (Faker $faker) {
    return [
        'name' =>  $faker->word,
        'category_id'   =>  $faker->numberBetween(0,50),
    ];
});
