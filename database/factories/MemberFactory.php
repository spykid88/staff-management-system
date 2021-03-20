<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\member;
use Faker\Generator as Faker;

$factory->define(member::class, function (Faker $faker) {
    return [
        //'name' => $faker->unique()->name,
        //'id' => $faker->unique()->randomElement(member::pluck('id')->toArray()),
        //'id' => $faker->unique()->numberBetween(1,50),
        //'empno' => $faker->regexify('[0-9]{5}'),
        //'name' => $faker->name,
        //'typeflag' => $faker->numberBetween($min = 0, $max = 1),
        //'dep' => $faker->word('dep'),
        //'gender' => $faker->randomElement($array=['男性','女性']),
        //'email' => $faker->email,
        //'created_at' => $faker->datetime($max = 'now', $timezone = date_default_timezone_get()),

        // 'id' => $faker->randomElement(member::pluck('id')->toArray()),
        // 'empno' => $faker->regexify('[0-9]{5}'),
        // 'name' => $faker->name,
        // 'typeflag' => $faker->numberBetween($min = 0, $max = 1),
        // 'dep' => $faker->word('dep'),
        // 'gender' => $faker->randomElement($array=['男性','女性']),
        // 'email' => $faker->email,
        // 'created_at' => $faker->datetime($max = 'now', $timezone = date_default_timezone_get()),

        'id' =>  $faker->unique()->numberBetween(1,50),
        'empno' => $faker->unique()->regexify('[0-9]{2}'),
        'name' => $faker->name,
        'typeflag' => $faker->numberBetween($min = 0, $max = 1),
        'dep' => $faker->word('dep'),
        'gender' => $faker->randomElement($array=['男性','女性']),
        'email' => $faker->email,
        'created_at' => $faker->datetime($max = 'now', $timezone = date_default_timezone_get()),
    ];
});
