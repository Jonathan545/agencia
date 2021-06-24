<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Servicios;
use Faker\Generator as Faker;

$factory->define(Servicios::class, function (Faker $faker) {

    return [
        'trab_id' => $faker->randomDigitNotNull,
        'srv_tipo_servicio' => $faker->word
    ];
});
