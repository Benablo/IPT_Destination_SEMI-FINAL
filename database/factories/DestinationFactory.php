<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Destination;
use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'name' => $faker->name(),
        'address' => $faker->address(),
        'type' => $faker->sentence(1),
        'rating' => $faker->randomNumber()
    ];
});
