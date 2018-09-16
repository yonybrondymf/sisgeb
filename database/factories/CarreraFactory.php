<?php

use Faker\Generator as Faker;

$factory->define(App\Carrera::class, function (Faker $faker) {
    return [
       	'carrera' => $faker->sentence(2),
    ];
});
