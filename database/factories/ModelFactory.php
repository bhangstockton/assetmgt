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

// SUPPLIER
$factory->define(App\Supplier::class, function (Faker\Generator $faker) {
    $faker = Faker\Factory::create('en_PH'); 
    return [
        'name' => $faker->company,
        'address1' => $faker->address(),
    ];
});

// EMPLOYEE
$factory->define(App\Employee::class, function (Faker\Generator $faker) {
    return [
    	'lastname' => $faker->lastname,
        'middlename' => $faker->lastname,
        'remarks' => $faker->text($maxNbChars = 200),
        'position' => $faker->text($maxNbChars = 20),
    ];
});

$factory->defineAs(App\Employee::class, 'female', function (Faker\Generator $faker) use ($factory) {
    $user = $factory->raw(App\Employee::class);

    return array_merge($user, [
        'firstname' => $faker->firstNameFemale,
        'sex' => 'f',
        ]);
});

$factory->defineAs(App\Employee::class, 'male', function (Faker\Generator $faker) use ($factory) {
    $user = $factory->raw(App\Employee::class);

    return array_merge($user, [
        'firstname' => $faker->firstNameMale,
        'sex' => 'm',
        ]);
});

// OFFICES
$factory->define(App\Office::class, function (Faker\Generator $faker) {
    return [
        'office_name' => $faker->company .' Department',
    ];
});

// BRAND
$factory->define(App\Brand::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->word,
    ];
});
