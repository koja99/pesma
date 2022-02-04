<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class IzvodjacFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'ime'=>$this->faker->firstName(),
            'prezime'=>$this->faker->lastName(),
            'godina_rodjenja'=>$this->faker->year(),
            'mesto_rodjenja'=>$this->faker->word()
        ];
    }
}
