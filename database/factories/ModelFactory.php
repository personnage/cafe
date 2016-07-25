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

$factory->define(App\Models\Role::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->word,
        'label' => $faker->sentence,
    ];
});

$factory->define(App\Models\Permission::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->words($nb = 2, $asText = true),
        'label' => $faker->sentence,
    ];
});

$factory->define(App\Models\City::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->city,
        'domain' => $faker->domainWord,
    ];
});

$factory->define(App\Models\Post::class, function (Faker\Generator $faker) {
    return [
        'user_id' => factory(App\Models\User::class)->create()->id,
        'title' => $faker->sentence,
        'body' =>  $faker->paragraph,
    ];
});

$factory->define(App\Models\ContentCategoryType::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->unique()->word,
        'title' => $faker->sentence,
    ];
});

$factory->define(App\Models\ContentCategory::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->unique()->word,
        'title' => $faker->words(mt_rand(1, 4), true),
        'description' => $faker->sentence,
        'content_category_type_id' => factory(App\Models\ContentCategoryType::class)->create()->id,
    ];
});

$factory->define(App\Models\ContentCategoryImage::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->image('/', 800, 600, 'cats', false),
        'content_category_id' => factory(App\Models\ContentCategory::class)->create()->id,
    ];
});

$factory->define(App\Models\Content::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->slug,
        'title' => $faker->sentence,
        'announcement' => $faker->paragraph,
        'body' => $faker->paragraphs(3, true),
        'comments_allowed' => $faker->boolean(70),
//        'content_category_id' => factory(App\Models\ContentCategory::class)->create()->id,
//        'user_id' => factory(App\Models\User::class)->create()->id,
    ];
});
