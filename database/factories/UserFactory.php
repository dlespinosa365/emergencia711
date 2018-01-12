<?php

use Faker\Generator as Faker;
use App\User;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'lastname' => $faker->lastName,
        'phone' => $faker->phoneNumber,
        'password' => $password ?: $password = bcrypt('123456'),
        'remember_token' => str_random(10),
        'role' => array_random([User::ROLE_ENFERMERA, User::ROLE_CHOFER, User::ROLE_DIRECTIVO, User::ROLE_DOCTOR, User::ROLE_NUERSE])
    ];
});
