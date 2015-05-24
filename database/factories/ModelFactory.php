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





$factory->define('Boss\Pos\Users\User', function ($faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => str_random(10),
        'remember_token' => str_random(10),
    ];
});

$factory->define('Boss\Pos\Projects\Project', function ($faker) {

	return [
		'title' => $faker->sentence,
		'description' => $faker->paragraph,
		'class' => 'info',
		'due_date' => $time = \Carbon\Carbon::now()->addDays(3)->toDateString(),
		'due_time' => $time = \Carbon\Carbon::now()->addHours(7)->toTimeString(),
		'conversation_id' => rand(1,10),
		'task_id' => rand(1,10),
		'delegated_id' => rand(1,10),
		'facility_id' => 1,
		'owner_id' => 1,
		'creator_id' => 1,
	];
});

$factory->define('Boss\Pos\Projects\Task', function ($faker) {

	return [
		'title' => $faker->sentence,
		'description' => $faker->paragraph,
		'class' => 'info',
		'due_date' => $time = \Carbon\Carbon::now()->addDays(3)->toDateString(),
		'due_time' => $time = \Carbon\Carbon::now()->addHours(7)->toTimeString(),
		'project_id' => rand(1,10),
		'conversation_id' => rand(1,10),
		'facility_id' => 1,
		'owner_id' => 1,
		'creator_id' => 1,
	];
});

$factory->define('Boss\Pos\Conversations\Conversation', function ($faker) {
	return [
		'title' => $faker->sentence,
		'description' => $faker->paragraph,
		'class' => 'info',
		'owner_id' => rand(1,10),
		'owner_type' => 'Project',
		'user_id' => rand(1,10),
		'facility_id' => 1,
		'tagged_id' => 1,
	];
});

$factory->define('Boss\Pos\Conversations\Message', function ($faker) {
	return [
		'subject' => $faker->sentence,
		'body' => $faker->paragraph,
		'class' => 'info',
		'conversation_id' => rand(1,10),
		'user_id' => rand(1,10),
		'tagged_id' => 1,
	];
});

