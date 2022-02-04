<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use \App\Models\User;
use \App\Models\Zanr;
use \App\Models\Izvodjac;
use \App\Models\Pesma;

class PesmaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'naziv_pesme'=>$this->faker->title(),
            'zanr_id'=>$this->faker->numberBetween(1,5),
            'izvodjac_id'=>Izvodjac::factory(),
            'user_id'=>User::factory(),
        
        ];
    }
}
