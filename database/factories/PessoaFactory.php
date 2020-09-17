<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Pessoa;
use Faker\Generator as Faker;

$factory->define(Pessoa::class, function (Faker $faker) {
    return [
        'dt_nascimento' =>$faker->date,
        'id_chapa'      =>$faker->randomDigit,
        'telefone'      =>$faker->phonenumber,
        'endereco'      =>$faker->address,
        'bairro'        =>$faker->streetName,
        'cidade'        =>$faker->city,
        'sexo'          =>'M',
        'estado'        =>$faker->state,
        'pais'          =>$faker->country
    ];
});
