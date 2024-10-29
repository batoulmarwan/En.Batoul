<?php

namespace Database\Seeders;

use App\Models\town;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TownSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       // town::truncate();
        town::create([
            'name'=>'lib/assets/Cities/AleppoCity.png',
            ]);
        town::create([
            'name'=>'lib/assets/Cities/Al-HasakaCity.png',
            ]);
        town::create([
            'name'=>'lib/assets/Cities/Ar-RaqqahCity.png',
             ]);
        town::create([
            'name'=>'lib/assets/Cities/As-SuwaydaCity.png',
             ]);
        town::create([
            'name'=>'lib/assets/Cities/DamasucCity.png',
            ]);
        town::create([
            'name'=>'lib/assets/Cities/DaraaCity.png',
            ]);
        town::create([
            'name'=>'lib/assets/Cities/DeirEz-ZorCity.png',
             ]);
        town::create([
            'name'=>'lib/assets/Cities/HamaCity.png',
             ]);
        town::create([
            'name'=>'lib/assets/Cities/HomsCity.png',
            ]);
        town::create([
            'name'=>'lib/assets/Cities/IdlibCity.png',
            ]);
          town::create([
                'name'=>'lib/assets/Cities/LatakiaCity.png',
                ]);
                town::create([
                    'name'=>'lib/assets/Cities/QuneitraCity.png',
                    ]);       

            
            

    }
}
