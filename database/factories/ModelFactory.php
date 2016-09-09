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

$factory->define('App\Score', function ($faker) {
    return [
        'name' => $faker->name,
        'score' => $faker->numberBetween($min = 0, $max = 9000),
    ];
});
