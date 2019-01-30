<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Categories::class, function (Faker $faker) {
    return [
        'category_name' => $faker->word,
        'description'   => $faker->sentence,
    ];
});
