<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Zanr;

class ZanrSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $zanr1 = Zanr::create([
            'naziv_zanra'=>"Folk",
            'opis_zanra'=>'Zabavna muzika'
        ]);

        $zanr2 = Zanr::create([
            'naziv_zanra'=>"Rok",
            'opis_zanra'=>'Glasna muzika'
        ]);

        $zanr3 = Zanr::create([
            'naziv_zanra'=>"Klasika",
            'opis_zanra'=>'Opustajuca muzika'
        ]);

        $zanr4 = Zanr::create([
            'naziv_zanra'=>"Pop",
            'opis_zanra'=>'Muzika za igranje'
        ]);

        $zanr5 = Zanr::create([
            'naziv_zanra'=>"Narodna",
            'opis_zanra'=>'Muzika za veselja'
        ]);

    }
}