<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\RegistroDeActividades;
use Faker\Generator as Faker;

$factory->define(RegistroDeActividades::class, function (Faker $faker) {

    return [
        'cli_id' => $faker->randomDigitNotNull,
        'srv_id' => $faker->randomDigitNotNull,
        'rgt_tipo_contrato' => $faker->word,
        'rgt_servicio_contratado' => $faker->word,
        'rgt_inicio_contrato' => $faker->word,
        'rgt_fecha_facturar' => $faker->word
    ];
});
