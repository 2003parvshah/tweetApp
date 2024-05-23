<?php

// namespace Database\Factories;

// use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
// class TweetFactory extends Factory
// {
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
//     public function definition()
//     {
//         return [
//             //
//         ];
//     }
// }


// <?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Tweet;
use Faker\Generator as Faker;

$factory->define(Tweet::class, function (Faker $faker) {
    return [
        'user_id' => factory(App\User::class),
        'body' => $faker->sentence
    ];
});
