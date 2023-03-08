<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use App\AnnualLeave;
use Faker\Generator as Faker;

$factory->define(AnnualLeave::class, function (Faker $faker) {
    return [
        'user_id' => factory(User::class),
        'start_date' => $faker->dateTimeBetween('now', '+1 month'),
        'end_date' => $faker->dateTimeBetween('+1 month', '+2 months'),
        'status' => $faker->randomElement(['pending', 'rejected', 'approved']),
        'reason' => $faker->realText(180),
    ];
});
