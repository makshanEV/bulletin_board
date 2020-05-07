<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Advert;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

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

$factory->define(Advert::class, function (Faker $faker) {
    return [
    	'slug' => Str::slug($faker->unique()->word),
        'title' => $faker->word,
        'full_text' => $faker->text,
        'price' => $faker->numberBetween(1000, 5000),
        'phone_number' => $faker->unique()->e164PhoneNumber,
        'category_id' => $faker->numberBetween(1, 5),
        'user_id' => $faker->numberBetween(1, 3),
    ];
});
