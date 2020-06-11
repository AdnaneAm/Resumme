<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Order;
use Faker\Generator as Faker;

$factory->define(Order::class, function (Faker $faker) {
    return [
        'user_id' => factory(App\User::class),
        'status' => $faker->randomElement(['active','finished','waiting']),
    ];
});
