<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Center;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        //
        'name' => $faker->name,
        'nrc'
    ];
});
