<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Post;
use App\Models\Category;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        //
        'name' => $faker->word,
        'category_id' => factory(Category::class),
        'creator_id' => $faker->numberBetween(1, 10)
    ];
});
