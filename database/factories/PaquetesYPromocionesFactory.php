<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\PaquetesYPromociones;
use Faker\Generator as Faker;

$factory->define(PaquetesYPromociones::class, function (Faker $faker) {

    return [
        'srv_id' => $faker->randomDigitNotNull,
        'prom_descuentos' => $faker->word,
        'prom_planes_prepago' => $faker->word,
        'prom_planes_pospago' => $faker->word,
        'prom_combos_bonos' => $faker->word,
        'prom_celulares_promocion' => $faker->word
    ];
});
