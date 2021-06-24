<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Nosotros;
use Faker\Generator as Faker;

$factory->define(Nosotros::class, function (Faker $faker) {

    return [
        'ent_rep_legal' => $faker->word,
        'ent_nombre_entidad' => $faker->word,
        'ent_ubicacion' => $faker->word,
        'ent_correo' => $faker->word,
        'ent_telefono' => $faker->randomDigitNotNull,
        'ent_sitio_web' => $faker->word
    ];
});
