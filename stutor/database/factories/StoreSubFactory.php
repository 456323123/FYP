<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\StoreSub;
use Faker\Generator as Faker;

$factory->define(StoreSub::class, function (Faker $faker) {
    return [
        'cours_name' => $faker->name,
        'subjects' => $faker->name,
        'status' => $faker->numberBetween(0,0),
          'user_id' => $faker->numberBetween(1,10),
        //'email_verified_at' => now(),

    ];
});
