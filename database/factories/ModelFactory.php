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

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Location::class, function(Faker\Generator $faker) {
	return [
	'zipcode' => $faker->postcode,
	'city' => $faker->city,
	'state' => function() {
		return factory('App\State')->create()->abbrv;
	},
	];
});

$factory->define(App\State::class, function(Faker\Generator $faker) {
	return [
	'abbrv' => $faker->stateAbbr,
	'name' => $faker->state,
	];
});

$factory->define(App\Weather::class, function(Faker\Generator $faker) {
	return [
	'zipcode' => function() {
		return factory('App\Location')->create()->zipcode;
	},
	'date' => $faker->date,
	'tempHigh' => $faker->randomDigit,
	'tempLow' => $faker->randomDigit,
	'humidity' => $faker->randomDigit,
	'precipitation' => $faker->boolean($chanceOfGettingTrue = 50),
	];
});

$factory->define(App\Request::class, function(Faker\Generator $faker) {
	return [
	'fname' => $faker->firstName,
	'lname' => $faker->lastName,
	'zipcode' => function() {
		return factory('App\Location')->create()->zipcode;
	},
	'weatherID' => function() {
		return factory('App\Weather')->create()->id;
	},
	];
});