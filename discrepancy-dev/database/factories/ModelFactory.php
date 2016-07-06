<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/
//user_factory
$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'first_name' => $faker->firstName($gender = null|'male'|'female'),
        'last_name' => $faker->lastName,
        'username' => $faker->userName,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
    ];
});

//error_factory
$factory->define(App\Error::class, function (Faker\Generator $faker) {
    return [
        'order_id'=> $faker->numberBetween($min = 1000000, $max = 1300000),
        'rap_order_id'=> $faker->numberBetween($min = 40165000, $max = 40300000),
        'rap_part_id'=> $faker->numberBetween($min = 1, $max = 3),
        'gcs_reference'=> $faker->numberBetween($min = 20151200, $max = 20151600),
        'sc_reference'=> $faker->numerify('SC201####'),
        'created_by_user_id'=> $faker->numberBetween($min = 1, $max = 5),
        'status'=> $faker->randomElement($array = array ('New','In Progress','Further Investigation', 'Complete')),
        //$table->string 'errors_linked'=> $faker->
        //$table->timestampTz 'date_raised'=> $faker->
    ];
});