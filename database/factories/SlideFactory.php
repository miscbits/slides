<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'title' => $faker->word . ' ' . $faker->word . ' ' . $faker->word,
        'content' => $faker->paragraphs(),
        'slug' => Str::random(5),
        'section_id' => 0,
    ];
});
