<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\CentroDeLlamadas;
use Faker\Generator as Faker;

$factory->define(CentroDeLlamadas::class, function (Faker $faker) {

    return [
        'cli_id' => $faker->randomDigitNotNull,
        'prom_id' => $faker->randomDigitNotNull,
        'trab_id' => $faker->randomDigitNotNull,
        'call_ayuda_cliente' => $faker->word,
        'call_contrato_servicios' => $faker->word,
        'call_servicios_tecnicos' => $faker->word,
        'call_soluciones_problemas' => $faker->word,
        'call_puntos_pago' => $faker->word
    ];
});
