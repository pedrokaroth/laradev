<?php

use Faker\Generator as Faker;

$factory->define(LaraDev\Post::class, function (Faker $faker) {
    $title = $faker->sentence(10);
    $slug = str_slug($title);
    return [
        'title' => $title,
        'slug' => $slug,
        'subtitle' => $faker->sentence(10),
        'content' => $faker->paragraph(5),
        'publish_at' => $faker->dateTime(),
        'category' => function() {
            return factory(\LaraDev\Categories::class)->create()->id;
        }

    ];
});
