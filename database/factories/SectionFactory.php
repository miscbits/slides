<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Section;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(Section::class, function (Faker $faker) {
    return [
        'name' => Str::random(10),
    ];
});
