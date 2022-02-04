<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ZanrFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'naziv_zanra'=>$this->faker->word(),
            'opis_zanra'=>$this->faker->word(),
        ];
    }
}
