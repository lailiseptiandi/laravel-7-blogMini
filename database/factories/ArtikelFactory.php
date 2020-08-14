<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Artikel;
use App\Categori;
use App\Model;
use Faker\Generator as Faker;

$factory->define(Artikel::class, function (Faker $faker) {
    $word = $faker->word;
    return [
        'judul' =>Str::slug ($faker->unique()->name, '-'),
        'body' => $word,
        'gambar' => $faker->unique()->name,
        'categories_id' => function()
        {
            return Categori::all()->random();
        }
    ];
});
