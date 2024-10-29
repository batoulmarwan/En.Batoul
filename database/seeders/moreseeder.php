<?php

namespace Database\Seeders;

use App\Models\more;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class moreseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
            more::create([
                'more'=>'speakers for high volume',
                ]);
                more::create([
                    'more'=>'3D',
                    ]);
    }
}
