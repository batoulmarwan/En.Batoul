<?php

namespace Database\Seeders;

use App\Models\type_events;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Type_eventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       // type_events::truncate();
        type_events::create([
            'type_event'=>'Wedding&Engagment',  
        ]);
        type_events::create([
            'type_event'=>'Graduation',
        ]);
        type_events::create([
            'type_event'=>'Birthdays',
        ]);
        type_events::create([
            'type_event'=>'PrivateEvents',
        ]);
    }

}
