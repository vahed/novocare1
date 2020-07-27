<?php

use Faker\Generator as Faker;

$factory->define(App\Profile::class, function (Faker $faker) {
	return [
		'id' => 1,
		'firstname' => $faker->firstname,
		'lastname' => $faker->lastname,
		'userType' => 'patient',
		'gender' => 'male', // secret
		'dateOfBirth' => $faker->date_date_set,
		'phone' =>$faker->phone
	];
});
