<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Review;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Review::class, function (Faker $faker) {
    return [
        'id' => Str::uuid(),
        'content' => $faker->sentence(30, true),
        'rating' => random_int(1, 5),
        'created_at' => $faker->dateTimeBetween('-6 months', '-2 months'),
        'updated_at' => $faker->dateTimeBetween('-1 months')
    ];
});
