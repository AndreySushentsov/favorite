<?php

use Faker\Generator as Faker;

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

$factory->define(App\Post::class, function (Faker $faker) {

    $user = App\User::inRandomOrder()->first();

    return [
        'user_id' => $user->id,
        'title' => $faker->sentence,
        'body' => $faker->text,
    ];
});