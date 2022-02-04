<?php

namespace Database\Seeders;
use \App\Models\User;
use \App\Models\Zanr;
use \App\Models\Izvodjac;
use \App\Models\Pesma;

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        Zanr::truncate();
        Izvodjac::truncate();
        Pesma::truncate();

        $this->call([
            ZanrSeeder::class
        ]);

        Pesma::factory(5)->create();

        

        /*$user1 = User::factory(10)->create();

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

        $izvodjac1 = Izvodjac::create([
            'ime'=>'Boban',
            'prezime'=>'Rajovic',
            'godina_rodjenja'=>'1971',
            'mesto_rodjenja'=>'Kopenhagen'
        ]);

        $izvodjac2 = Izvodjac::create([
            'ime'=>'Momcilo',
            'prezime'=>'Bajagic',
            'godina_rodjenja'=>'1960',
            'mesto_rodjenja'=>'Bjelovar'
        ]);

        $izvodjac3 = Izvodjac::create([
            'ime'=>'Ludvig',
            'prezime'=>'van Betoven',
            'godina_rodjenja'=>'1770',
            'mesto_rodjenja'=>'Bonn'
        ]);

        Pesma::create([
            'naziv_pesme'=>'Tisina',
            'zanr_id'=>$zanr2->id,
            'izvodjac_id'=>$izvodjac2->id,
            'user_id'=>$user1->id
        ]);

        Pesma::create([
            'naziv_pesme'=>'Usne boje vina',
            'zanr_id'=>$zanr1->id,
            'izvodjac_id'=>$izvodjac1->id,
            'user_id'=>$user1->id
        ]);

        Pesma::create([
            'naziv_pesme'=>'Oda radosti',
            'zanr_id'=>$zanr3->id,
            'izvodjac_id'=>$izvodjac3->id,
            'user_id'=>$user1->id
        ]);*/

        
        
    }
}
