<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\Product;
use App\Category;

$factory->define(Product::class, function (Faker $faker) {
	$category_id = Category::all()->pluck('id');
    return [
        'name' => $faker->name,
        'quanlity' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = NULL),
        'description' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'category_id' => $faker->randomElement($category_id)
    ];
});
