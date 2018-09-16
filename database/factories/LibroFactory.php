<?php

use Faker\Generator as Faker;

$factory->define(App\Libro::class, function (Faker $faker) {
    return [
        "codigo" => $faker->postcode,
        "ejemplares" => $faker->randomDigitNotNull,
        "titulo" => $faker->title,    
    ];
});
