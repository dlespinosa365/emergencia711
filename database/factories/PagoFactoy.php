<?php

use Faker\Generator as Faker;

$factory->define(App\Pago::class, function (Faker $faker) {

    return [
        'cliente_id' => $faker->numberBetween(1, 100),
        'monto' => $faker->numberBetween(110, 600),
        'cobrado' => $faker->name(),
        'tipo' => 'mensual',
    ];

});
