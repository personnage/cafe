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

$factory->define(App\Models\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
        'api_token' => str_random(32),
    ];
});

$factory->define(App\Models\Post::class, function (Faker\Generator $faker) {
    return [
        'user_id' => factory(App\Models\User::class)->create()->id,
        'title' => $faker->sentence,
        'body' =>  $faker->paragraph,
    ];
});
