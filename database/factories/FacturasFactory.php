<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Facturas;
use Faker\Generator as Faker;

$factory->define(Facturas::class, function (Faker $faker) {

    return [
        'cli_id' => $faker->randomDigitNotNull,
        'ent_id' => $faker->randomDigitNotNull,
        'srv_id' => $faker->randomDigitNotNull,
        'fac_num_factura' => $faker->randomDigitNotNull,
        'fac_fecha' => $faker->word
    ];
});
