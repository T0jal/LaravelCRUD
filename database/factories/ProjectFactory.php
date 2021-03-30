<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Project;
use Faker\Generator as Faker;

$factory->define(Project::class, function (Faker $faker) {
    return [
        'project_name'          => $faker->sentence($nbWords = 3),
        'created_at'            => $faker->dateTime($max = 'now', $timezone = null),
        'updated_at'            => $faker->dateTime($max = 'now', $timezone = null),
    ];
});
