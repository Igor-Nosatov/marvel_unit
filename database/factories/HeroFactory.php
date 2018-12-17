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
use App\Hero;
/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(Hero::class, function (Faker\Generator $faker) {
    return [
        'nick' => $faker->word,
        'real' => $faker->word,
        'characteristic' => $faker->word,
        'superpowers' => $faker->word,
        'catch_phrase' => $faker->word,
    ];
});
