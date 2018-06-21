<?php

use Faker\Generator as Faker;

$factory->define(App\Album::class, function (Faker $faker) {
    return [
        'title' => $faker->title,
        'artist'=> $faker->name,
        'genre'=> $faker->word,
    ];
});
