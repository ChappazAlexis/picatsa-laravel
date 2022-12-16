<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cat>
 */
class CatFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'legend'=>fake()->firstName(),
            'description'=>fake()->realText($macNbChars = 50, $indexSize = 2),
            'url'=>('https://cataas.com/cat'),
            'statut'=>('1'),
        ];
    }
}
