<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});
/*

$factory->define(App\Tipo::class, function (Faker\Generator $faker) {
    return [
        'tipo_recurso' => $faker->sentence(30),
    ];
});


$factory->define(App\Recurso::class, function (Faker\Generator $faker) {
    return [

         'cod_tomb'=>$faker->sentence(10),
         'nome_recurso'=>$faker->sentence(20),
         'descricao_recurso' =>$faker->sentence(20),
         'obs_recurso'=>$faker->sentence(20),
         'id_tipo'=>1,

    ];
});
*/
