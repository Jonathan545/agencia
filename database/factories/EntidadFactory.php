<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Entidad;
use Faker\Generator as Faker;

$factory->define(Entidad::class, function (Faker $faker) {

    return [
        'ent_rep_legal' => $faker->word,
        'ent_nombre_entidad' => $faker->word,
        'ent_ubicacion' => $faker->word
    ];
});
