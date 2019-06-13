<?php

use Faker\Generator as Faker;
use App\Models\Offer;
use App\User;


/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Offer::class, function (Faker $faker) {
//    dd(User::getDate());
    return [
//        'type_object' =>$faker->randomElement(['flat','house']),
        'price' => random_int(100,10000),
        'type_price' =>$faker-> randomElement(['USD','EUR','UAH']),
//        'type_wall'=> $faker-> randomElement(['panel','brick']),
        'number_rooms' => random_int(1,4),
        'user_id' => 1,
        'phone' => $faker->phoneNumber,
        'information' => $faker->text,
    ];
}

);

$factory->state(Offer::class, 'flat', function (Faker $faker) {
    return [
        'type_object' => 'flat',

    ];
});

$factory->state(Offer::class, 'house', function (Faker $faker) {
    return [
        'type_object' => 'house',
    ];
});

$factory->state(Offer::class, 'brick', function (Faker $faker) {
    return [
        'type_wall' => 'panel',
    ];
});

$factory->state(Offer::class, 'panel', function (Faker $faker) {
    return [
        'type_wall' => 'panel',
    ];
});