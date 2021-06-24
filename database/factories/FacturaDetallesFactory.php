<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\FacturaDetalles;
use Faker\Generator as Faker;

$factory->define(FacturaDetalles::class, function (Faker $faker) {

    return [
        'fac_id' => $faker->randomDigitNotNull,
        'fac_tipo_pago' => $faker->randomDigitNotNull,
        'fac_descripcion' => $faker->word,
        'fac_valor_servicio' => $faker->word,
        'fac_descuento' => $faker->randomDigitNotNull,
        'fac_iva' => $faker->randomDigitNotNull,
        'fac_total' => $faker->randomDigitNotNull
    ];
});
