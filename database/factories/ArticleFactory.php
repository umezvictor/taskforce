<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Article::class, function (Faker $faker) {
    //creates sample data
    return [
        'title' => $faker->text(50),
        'body' => $faker->text(200)
    ];
});
