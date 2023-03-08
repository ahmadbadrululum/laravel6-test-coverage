<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use App\AnnualLeave;
use Faker\Generator as Faker;

$factory->define(AnnualLeave::class, function (Faker $faker) {
    return [
        'user_id' => factory(User::class)->create()->id,
        'start_date' => $faker->date(),
        'end_date' =>  $faker->date(),
        'status' => $faker->randomElement(['pending', 'rejected', 'approved']),
        'reason' => $faker->realText(180),
    ];
});
