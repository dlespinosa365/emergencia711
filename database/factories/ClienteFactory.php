<?php

use Faker\Generator as Faker;

$factory->define(App\Cliente::class, function (Faker $faker) {
    return [
        'nombres' => $faker->name(),
        'apellidos' => $faker->lastName,
        'cedula' => $faker->unique()->numberBetween(1000000, 9999999),
        'fecha_nac' => $faker->date(),
        'calles' => $faker->firstName,
        'entrecalles' => $faker->name . ' y ' . $faker->name,
        'telefono' => $faker->phoneNumber,
        'latitud' => $faker->latitude,
        'longitud' => $faker->longitude,
        'balneario' => 'Salinas Norte',
        'manzana' => $faker->numberBetween(1, 500),
        'solar' => $faker->numberBetween(1, 500),
        'referencia' => 'La Caza pintada de azul',
        'celular' => $faker->phoneNumber,
        'email' => $faker->unique()->email,
        'emergencia' => 'emergencia711',
        'sexo' => $faker->boolean
    ];
});
