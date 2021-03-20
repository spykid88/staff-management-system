<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */


use App\contract;
use App\member;
use Faker\Generator as Faker;

$factory->define(contract::class, function (Faker $faker) {
    return [
        //
        //'contract_id' => $faker->randomElement(contract::pluck('contract_id')->toArray()),
        ////'emp_id' => App\member::pluck('id'),
        ////'emp_id' => App\member::pluck('id')->toArray(),
       // //'emp_id' => App\member::unique()->numberBetween(1,50),
        ////'emp_id' => App\member::inRandomOrder()->first()->id,
        ////'emp_id' => factory(member::class)->create()->id,
        //// 'emp_id' => $faker->randomElement(contract::pluck('emp_id')->toArray()),
        //'status_flag' => $faker->numberBetween($min = 0, $max = 1),
        //'contract_comp' => $faker->company,
        //'contract_dep' => $faker->word('contract_dep'),
        //'contract_start_date' => $faker->datetime($max = 'now', $timezone = date_default_timezone_get()),
        //'contract_end_date' =>  $faker->dateTime,
        //'brc_contract_start_date' =>  $faker->dateTime,
        //'brc_contract_end_date' =>  $faker->dateTime,
        //'brc_staff_start_date' => $faker->dateTime,
        //'created_at' => $faker->datetime($max = 'now', $timezone = date_default_timezone_get()),


        // 'contract_id' => $faker->randomElement(contract::pluck('contract_id')->toArray()),
        // 'emp_id' => App\member::inRandomOrder()->first()->id,
        // // 'emp_id' => factory(member::class)->create()->id,
        // // 'emp_id' => $faker->randomElement(contract::pluck('emp_id')->toArray()),
        // 'status_flag' => $faker->numberBetween($min = 0, $max = 1),
        // 'contract_comp' => $faker->company,
        // 'contract_dep' => $faker->word('contract_dep'),
        // 'contract_start_date' => $faker->datetime($max = 'now', $timezone = date_default_timezone_get()),
        // 'contract_end_date' =>  $faker->dateTime,
        // 'brc_contract_start_date' =>  $faker->dateTime,
        // 'brc_contract_end_date' =>  $faker->dateTime,
        // 'brc_staff_start_date' => $faker->dateTime,
        // 'created_at' => $faker->datetime($max = 'now', $timezone = date_default_timezone_get()),

        
        'contract_id' => $faker->randomElement(contract::pluck('contract_id')->toArray()),
        //'emp_id' => App\member::inRandomOrder()->first()->empno,
        'emp_id' => factory(App\member::class)->create()->empno,

        // 'emp_id' => factory(member::class)->create()->id,
        // 'emp_id' => $faker->randomElement(contract::pluck('emp_id')->toArray()),
        'status_flag' => $faker->numberBetween($min = 0, $max = 1),
        'contract_comp' => $faker->company,
        'contract_dep' => $faker->word('contract_dep'),
        'contract_start_date' => $faker->datetime($max = 'now', $timezone = date_default_timezone_get()),
        'contract_end_date' =>  $faker->dateTime,
        'brc_contract_start_date' =>  $faker->dateTime,
        'brc_contract_end_date' =>  $faker->dateTime,
        'brc_staff_start_date' => $faker->dateTime,
        'created_at' => $faker->datetime($max = 'now', $timezone = date_default_timezone_get()),
    ];
});
