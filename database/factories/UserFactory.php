<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Article;
use App\Category;
use App\User;
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

$factory->define(User::class, function (Faker $faker) {
    $firstName = $faker->firstName;
    $lastName = $faker->lastName;

    return [
        'name' => $firstName .' '.$lastName,
        'first_name' => $firstName,
        'last_name' => $lastName,
        'address' => $faker->streetAddress,
        'phone' => $faker->phoneNumber,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});

$factory->define(Article::class, function (Faker $faker) {
    $title = ucfirst($faker->words(3, true));
    return [
        'title' => $title,
        'slug' => Str::slug($title,'-'),
        'manufacturer' => $faker->company,
        'description' => $faker->sentence,
        'code' => $faker->ean13,
        'category_id' => 1,
        'active' => 1,
        'price' => rand(80,3999),
        'amount' => rand(0,50),
        'tax' => 'S1'
    ];
});

$factory->define(Category::class, function (Faker $faker) {
    return [
        'title' => $faker->name,
    ];
});