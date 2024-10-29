<?php

namespace Database\Seeders;

use App\Models\event_town;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventTownSeeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //event_town::truncate();
        event_town::create([
            'type_event_id'=>'1',
            'town_id'=>'1'
        ]);
        event_town::create([
            'type_event_id'=>'1',
            'town_id'=>'2'
        ]);
        event_town::create([
            'type_event_id'=>'1',
            'town_id'=>'3'
        ]);
        event_town::create([
            'type_event_id'=>'1',
            'town_id'=>'4'
        ]);
        event_town::create([
            'type_event_id'=>'1',
            'town_id'=>'5'
        ]);
        
        event_town::create([
            'type_event_id'=>'1',
            'town_id'=>'6'
        ]);
        event_town::create([
            'type_event_id'=>'1',
            'town_id'=>'7'
        ]);
        event_town::create([
            'type_event_id'=>'1',
            'town_id'=>'7'
        ]);
        event_town::create([
            'type_event_id'=>'1',
            'town_id'=>'9'
        ]);
        event_town::create([
            'type_event_id'=>'1',
            'town_id'=>'10'
        ]);
        event_town::create([
            'type_event_id'=>'2',
            'town_id'=>'1'
        ]);
        event_town::create([
            'type_event_id'=>'2',
            'town_id'=>'2'
        ]);
        event_town::create([
            'type_event_id'=>'2',
            'town_id'=>'3'
        ]);
        event_town::create([
            'type_event_id'=>'3',
            'town_id'=>'1'
        ]);
        event_town::create([
            'type_event_id'=>'35',
            'town_id'=>'2'
        ]);
        event_town::create([
            'type_event_id'=>'4',
            'town_id'=>'1'
        ]);
        event_town::create([
            'type_event_id'=>'4',
            'town_id'=>'10'
        ]);
        

    }
}
