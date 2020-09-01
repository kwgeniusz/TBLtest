<?php

use Faker\Generator as Faker;

$factory->define(App\Contact::class, function (Faker $faker) {
    return [
        'firstName' => $faker->firstName,
        'lastName'  => $faker->lastName,
        'email'     => $faker->unique()->safeEmail,
        'contactNumber'  => $faker->phoneNumber,
    ];
});