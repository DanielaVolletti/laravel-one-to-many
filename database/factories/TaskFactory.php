<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Task;
use Faker\Generator as Faker;

$factory->define(Task::class, function (Faker $faker) {
    return [
      'name' => $faker -> randomElement($array = array ('create database', 'create menu', 'visit', '730 model', 'mise en place', 'product order', 'accounting', 'tax closure')),
      'description' => $faker -> text(),
      'deadline' => $faker -> dateTimeInInterval($startDate = 'now', $interval = '+ 90 days', $timezone = null)
    ];
});
