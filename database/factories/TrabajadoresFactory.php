<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Trabajadores;
use Faker\Generator as Faker;

$factory->define(Trabajadores::class, function (Faker $faker) {

    return [
        'ent_id' => $faker->randomDigitNotNull,
        'trab_nombres' => $faker->word,
        'trab_apellidos' => $faker->word,
        'trab_genero' => $faker->randomDigitNotNull,
        'trab_estado_civil' => $faker->randomDigitNotNull,
        'trab_telefono' => $faker->word,
        'trab_correo' => $faker->word,
        'trab_cedula' => $faker->word,
        'trab_rol_trabajo' => $faker->word
    ];
});
