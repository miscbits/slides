<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Slide;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(Slide::class, function (Faker $faker) {
    return [
        'title' => $faker->word . ' ' . $faker->word . ' ' . $faker->word,
        'content' => $faker->paragraphs(),
        'slug' => Str::random(5),
        'section_id' => 0,
    ];
});
