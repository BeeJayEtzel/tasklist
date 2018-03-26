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

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'username' => $faker->userName,
        'email' => $faker->unique()->safeEmail,
        'password' => bcrypt('password'), // secret
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Project::class, function (Faker $faker) {
    return [
        'name' => ucfirst($faker->word),
        'user_id' => 1, 
    ];
});

$factory->define(App\Task::class, function (Faker $faker) {
    return [
        'description' => $faker->sentence, 
        'due_date' => $faker->dateTime(), 
        'project_id' => rand(1,10), 
    ];
});

$factory->define(App\Note::class, function (Faker $faker) {
    return [
        'body' => $faker->sentence, 
        'task_id' => rand(1,10) 
    ];
});

$factory->define(App\Subtask::class, function (Faker $faker) {
    return [
        'description' => $faker->sentence, 
        'due_date' => $faker->dateTime(), 
        'task_id' => rand(1,10), 
    ];
});