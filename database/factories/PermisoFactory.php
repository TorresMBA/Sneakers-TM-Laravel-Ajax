<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

//Factory se relaciona con un modelo para poder llenar datos falsos mediante faker por cantidad
//y se invoca en el seeder en este caso TablaPermisoSeeder desde su metodo run();
use App\Model;
use App\Models\Permiso;
use Faker\Generator as Faker;

$factory->define(Permiso::class, function (Faker $faker) {
    return [
        'nom_permiso' => $faker->word,
        'slug' => $faker->word
    ];
});
