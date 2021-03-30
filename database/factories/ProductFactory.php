<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'product_name'      => $faker->sentence($nbWords = 1),
        'category_id'       => $faker->numberBetween($min = 1, $max = 4),
        'project_id'        => $faker->numberBetween($min = 1, $max = 20),
        'description'       => $faker->sentence($nbWords = 10),
        'created_at'        => $faker->dateTime($max = 'now', $timezone = null),
        'updated_at'        => $faker->dateTime($max = 'now', $timezone = null),
    ];
});
