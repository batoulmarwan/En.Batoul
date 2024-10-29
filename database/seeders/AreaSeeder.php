<?php

namespace Database\Seeders;

use App\Models\area;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        area::create([
            'name'=>'harasta', 
            'town_id'=>'1', 
        ]);
        area::create([
            'name'=>'douma', 
            'town_id'=>'1', 
        ]);
        area::create([
            'name'=>'mazze', 
            'town_id'=>'1', 
        ]);
        area::create([
            'name'=>'akka', 
            'town_id'=>'2', 
        ]);
       
    }
}
