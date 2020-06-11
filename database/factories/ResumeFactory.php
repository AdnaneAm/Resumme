<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Resume;
use Faker\Generator as Faker;

$factory->define(Resume::class, function (Faker $faker) {
    return [
        'name'=>$faker->numerify('Resume ###'),
        'description'=>$faker->text(),
        'thumbnail'=>Str::random(20),
    ];
});
